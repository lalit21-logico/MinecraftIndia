<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class upload_model extends CI_Model{
 
  function insert_data($data){
      
    $this->db->insert("image",$data);
  }


  

}