<?php 
    if($product->num_rows() == 0){
        redirect('admin/product/all', 'refresh');
    }else{
        $product = $product->row();
?>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        //selector: "textarea",
        mode : "specific_textareas",
        plugins: [ "", "code", "", ""],
        editor_selector : "myHtmlEditor"
     });
</script>

<a href="<?php echo admin_url('product'); ?>"><p>Regresar a Todos los Productos</p></a>
<?php echo form_open(admin_url('product/updateInfo')); ?>
    <div class="row">
        <h1>Información del Producto</h1>
        <?php if(strlen(validation_errors()) > 0){ ?>
        <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        <?php } ?>
        <p><?php if(isset($message)){echo $message;}?></p>
            <div class="col-lg-6">
                <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $product->id ;?>" />

                <div class="form-group">
                    <label for="product_name">Nombre:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo set_value('product_name', $product->name);?>"/>
                </div>

                <div class="form-group">
                    <label for="product_dimensiones">Dimensiones:</label>
                    <input type="text" class="form-control" id="product_dimensiones" name="product_dimensiones" value="<?php echo set_value('product_dimensiones', $product->dimensiones); ?>"/>
                </div>

                <div class="form-group">
                    <label for="product_sku">Sku:</label>
                    <input type="text" class="form-control" id="product_sku" name="product_sku" value="<?php echo set_value('product_sku', $product->sku); ?>"/>
                </div>

                <div class="form-group">
                    <label for="product_quantity">Cantidad:</label>
                    <input type="number" class="form-control" id="product_quantity" name="product_quantity" value="<?php echo set_value('product_quantity', $product->quantity); ?>" min="0"/>
                </div>

                <div class="form-group">
                    <label for="product_quantity">Precio:</label>
                    <input type="number" step="any" class="form-control" id="product_price" name="product_price" value="<?php echo set_value('product_price', $product->price); ?>" min="0"/>
                </div>

            </div>

            <div class="col-lg-6">
<!--
                <div class="form-group">
                    <label for="product_manufacturer">Fabricante:</label>
                    <select name="product_manufacturer" id="product_manufacturer" class="form-control">
                        <?php foreach($manufacturers->result() as $manufacturer){ ?>
                        <option value="<?php echo $manufacturer->id; ?>" <?php if($manufacturer->id == $product->manufacturer){ echo 'selected';}?>>
                            <?php echo $manufacturer->name; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
-->
                <div class="form-group">
                    <label for="product_category">Categoría:</label>
                    <select name="product_category" id="product_category" class="form-control">
                        <?php foreach($categories->result() as $category){ ?>
                        <option value="<?php echo $category->id; ?>" <?php if($category->id == $product->category){ echo 'selected'; } ?>>
                            <?php echo $category->name; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_image">Imagen Principal:</label>
                    <p>Para imagenes adicionales usa el formulario de la otra sección.</p>
                    <select name="product_image" id="product_image" class="form-control">
                        <?php foreach($images as $image){ ?>
                        <option value="<?php echo $image; ?>" <?php if($image == $product->image){ echo 'selected'; } ?>>
                            <?php echo $image; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_status">Estado:</label>
                    <select name="product_status" id="product_status" class="form-control">
                        <option value="1" <?php echo set_select('product_status', '1'); ?>>Enabled</option>
                        <option value="0" <?php echo set_select('product_status', '0'); ?>>Disabled</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="product_description">Descripción:</label>
            <textarea class="myHtmlEditor" id="product_description" name="product_description" style="width: 100%; height: 200px;"><?php echo set_value('product_description', $product->description);?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar" />
    </div>
</form>

<div class="row">
    <h1>Additional Product Images</h1>
    <a href="<?php echo admin_url('product/addProductImage?product_id=' . $product->id); ?>">Add New</a>
    <?php if(isset($upload_error)){ echo '<p>' . $upload_error . '</p>'; } ?>
    <?php echo form_open_multipart(admin_url('upload'), array('role' => 'form', 'class' => 'form-inline'));?>
        <input type="hidden" name="path" value="products"/>
        <input type="hidden" name="redirect" value="<?php echo 'product/single?id=' . $product->id; ?>"/>
        <div class="form-group">
            <label class="sr-only" for="imagefile">Choose File:</label>
            <input type="file" class="form-control" id="imagefile" name="imagefile">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="upload">
        </div>
    </form>
    <?php echo form_open(admin_url('product/updateImages')); ?>
        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>" />
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Order</td>
                </tr>
            </thead>
        <?php $count = 1; ?>
        <?php foreach($productImages->result() as $image){ ?>
            <tr>
                <input class="form-control" type="hidden" name="id<?php echo $count;?>" value="<?php echo $image->id;?>" />
                <td><input class="form-control" type="text" name="description<?php echo $count;?>" size="100" value="<?php echo set_value('description' . $count, $image->description); ?>"/></td>
                <td>
                    <?php echo form_dropdown('image' . $count, $images, array($image->url), 'class="form-control"'); ?>
                </td>
                <td>
                    <input class="form-control" type="number" step="1" name="order<?php echo $count; ?>" value="<?php echo set_value('order' . $count, $image->order); ?>"
                </td>
                <td>
                    <a href="<?php echo admin_url('product/deleteImage?id=' . $image->id); ?>">Delete Image</a>
                </td>
            </tr>
        <?php $count++; ?>
        <?php } ?>
        </table>
        <input class="btn btn-primary" type="submit" value="Save Product Images" />
    </form>
</div>

<div class="row">
    <h1>Product Reviews</h1>
    <table class="table table-responsive table-bordered table-hover">
        <thead>
            <tr>
                <td>Reviewer</td>
                <td>Score</td>
                <td>Review</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productReviews->result() as $review){ ?>
            <tr>
                <td><?php echo $review->name; ?></td>
                <td><?php echo $review->score; ?></td>
                <td><p><?php echo $review->review; ?></p></td>
                <td><a href="<?php echo admin_url('product/deleteReview?id=' . $review->id); ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="row">
    <h1>Product Specials</h1>
</div>


<?php } ?>