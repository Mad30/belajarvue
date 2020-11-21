<?php 
     
     defined('BASEPATH') OR exit('No direct script access allowed');
     
     class contact extends CI_Model {
     
         public function getAllContact($id)
         {
             return $this->db->get_where('contact_person',['instansi_id'=>$id])->result_array();
         }
     
     }
     
     /* End of file contact.php */
      
?>