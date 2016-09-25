<?php
class model_manufacturer extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function addManufacturer($name, $phone, $email, $logo){
        $data = array(
            'name'     => $name ,
            'phone'      => $phone ,
            'email'   => $email,
            'logo'    => $logo
         );
        
        $this->db->insert('manufacturer', $data);
        return $this->db->insert_id();
    }
    
    function editManufacturer($id, $name, $phone, $email, $logo){
        $data = array(
            'name'     => $name ,
            'phone'      => $phone ,
            'email'   => $email,
            'logo'    => $logo
         );
        $this->db->update('manufacturer', $data, array('id' => $id));
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function deleteManufacturer($id){
        $this->db->delete('manufacturer', array('id' => $id));
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function getManufacturer($id){
        return $this->db->query('SELECT * FROM `manufacturer` WHERE `id` = ? LIMIT 1;', array($id));
    }
    
    function getManufacturers(){
        return $this->db->query('SELECT * FROM `manufacturer` ORDER BY `name` ASC;');
    }
}
