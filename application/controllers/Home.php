<?php 
     
     defined('BASEPATH') OR exit('No direct script access allowed');
     
     class Home extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('contact');
        }
        
     
         public function index()
         {
            
             $this->load->view('home');
         }

         public function contact()
         {
             $id = $this->input->post('instansi_id');
             var_dump($id);
             
                echo json_encode($this->contact->getAllContact($id));
         }

         public function institusi()
         {
             echo json_encode($this->db->get('data_institusi')->result_array()
             );
         }
     
     }
     
     /* End of file Home.php */
      
?>