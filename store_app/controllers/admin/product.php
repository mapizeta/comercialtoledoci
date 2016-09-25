<?php
class product extends My_Controller{
    private $products;
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_Product', 'product');
        $this->load->model('Model_Manufacturer', 'manufacturer');
        $this->load->model('Model_Category', 'category');
        $this->load->model('Model_Review', 'review');
        
        $this->load->library('form_validation');
    }
    
    function index($data = array()){
        $this->all($data);
    }
    
    function all($data = array()){
        $data['products'] = $this->product->getProducts();
        parent::loadAdmin('product/all', $data);
    }
    
    function single($product_id = null, $data = array()){
        
        if($product_id == null){
            $product_id = $this->input->get('id');
        }
        
        if($product_id != false && is_numeric($product_id)){
            
            $images = array_diff(scandir('store_assets/images/products/'), array('.', '..'));
            $data['images'] = array();
            foreach($images as $image){
                $data['images'][$image] = $image;
            }
            
            $data['categories']     = $this->category->getCategories();
            $data['manufacturers']  = $this->manufacturer->getManufacturers();
            $data['product']        = $this->product->getProduct($product_id);
            $data['productImages']  = $this->product->getProductImages($product_id);
            $data['productSpecials']= $this->product->getProductSpecials($product_id);
            $data['productReviews'] = $this->review->getReview($product_id);
            
            parent::loadAdmin('product/single', $data);
        }
    }
    
    function add(){
        $data = array(
                'sku'           => '',
                'name'          => '',
                'description'   => '',
                'category'      => '',
                'manufacturer'  => '',
                'quantity'      => 0,
                'image'         => '',
                'price'         => '',
                'status'        => 0
            );
        $id = $this->product->insertProduct($data);
        redirect(admin_url('product/single?id=' . $id), 'refresh');
    }
    
    function delete(){
        if($this->input->get('id') != FALSE){
            $id = $this->input->get('id');
            $this->product->deleteProduct($id);
            $this->product->deleteAllProductImages($id);
            $this->product->deleteAllProductSpecials($id);
            $this->review->deleteAllProductReviews($id);
        }
    }
    
    function deleteImage(){
        $productImage = $this->input->get('id');
        $this->product->deleteProductImage($productImage);
        redirect($_SERVER['HTTP_REFERER'], 'refresh');
    }
    
    function deleteReview(){
        $review_id = $this->input->get('id');
        
        if($review_id){
            $this->review->deleteReview($review_id);
        }
        redirect($_SERVER['HTTP_REFERER'], 'refresh');
    }
    
    function addProductImage(){
        if($this->input->get('product_id')){
            $this->product->insertProductImage($this->input->get('product_id'), '', 0, '');
            redirect(admin_url('product/single?id=' . $this->input->get('product_id')));
        }
    }
    
    function updateInfo(){
        $product_id = $this->input->post('product_id');
        
        $this->form_validation->set_rules('product_id', 'ID', 'required|integer');
        $this->form_validation->set_rules('product_name', 'Name', 'required|max_length[60]');
        $this->form_validation->set_rules('product_sku', 'SKU', 'max_length[25]');
        $this->form_validation->set_rules('product_quantity', 'Quantity', 'required|integer|greater_than[-1]');
        $this->form_validation->set_rules('product_manufacturer', 'Manufacturer', 'required|integer');
        $this->form_validation->set_rules('product_category', 'Category', 'required|integer');
        $this->form_validation->set_rules('product_image', 'Image', 'required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('product_status', 'Status', 'required|integer|greater_than[-1]|less_than[2]');
        $this->form_validation->set_rules('product_description', 'Description', 'required|min_length[3]');
        $this->form_validation->set_rules('product_price', 'Price', 'required|decimal');
        
        if ($this->form_validation->run() != FALSE){
            $id = $this->input->post('product_id');
            $name = $this->input->post('product_name');
            $sku = $this->input->post('product_sku');
            $qty = $this->input->post('product_quantity');
            $manufacturer_id = $this->input->post('product_manufacturer');
            $category_id = $this->input->post('product_category');
            $image = $this->input->post('product_image');
            $sts = $this->input->post('product_status');
            $description = $this->input->post('product_description');
            $price = $this->input->post('product_price');
            
            $updateData = array(
                'sku'           => $sku,
                'name'          => $name,
                'description'   => $description,
                'category'      => $category_id,
                'manufacturer'  => $manufacturer_id,
                'quantity'      => $qty,
                'image'         => $image,
                'price'         => $price,
                'status'        => $sts
            );
            
            $this->product->updateProduct($id, $updateData);
            redirect(admin_url('product/single?id=' . $product_id), 'refresh');
        }else{
            $this->single($product_id);
        }
    }
    
    function updateImages(){
        if($this->input->post('product_id')){
            $product_id = $this->input->post('product_id');
            $currentImages = $this->product->getProductImages($product_id);
            
            for($x = 1; $x <= $currentImages->num_rows(); $x++){
                $this->form_validation->set_rules('id' . $x, 'ID', 'required|integer');
                $this->form_validation->set_rules('image' . $x, 'Image', 'required|max_length[100]');
                $this->form_validation->set_rules('order' . $x, 'Order', 'integer');
                $this->form_validation->set_rules('description' . $x, 'Description', 'required');
            }
            
            if($this->form_validation->run() != FALSE){
                for($x = 1; $x <= $currentImages->num_rows(); $x++){
                    $id         = $this->input->post('id' . $x);
                    $image      = $this->input->post('image' . $x);
                    $order      = $this->input->post('order' . $x);
                    $description= $this->input->post('description' . $x);

                    $this->product->editProductImage($id, $product_id, $image, $order, $description);
                }
                
                redirect(admin_url('product/single?id=' . $product_id, 'refresh'));
            }else{
                $this->single($product_id);
            }
        }
    }
    
    function updateSpecials(){
        if($this->input->post('product_id')){
            $product_id = $this->input->post('product_id');
        }
    }
    
    function addToCart(){
        $product_id = $this->input->get('product_id');
        if($product_id != FALSE){
            $product = $this->product->getProduct($product_id)->row();
            $product_special = $this->product->getProductSpecials($product_id, true)->row();
            $data = array(
               'id'      => $product->id,
               'qty'     => 1,
               'name'    => $product->name
            );
            if($product_special != null){
                $data['price'] = $product->row()->price;
            }else{
                $data['price'] = $product->price;
            }
            $this->cart->insert($data);
        }
    }
}
