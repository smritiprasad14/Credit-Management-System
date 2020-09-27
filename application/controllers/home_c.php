<?php
class Home_c extends CI_Controller
{
    public function index()
    {
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('Users_model');  
         //load the method of model  
         $data['h']=$this->Users_model->select();  
         //return the data in view  
         $this->load->view('home', $data);  
       // print_r($data['users']);
    }

    public function view($uid){
     

      $this->load->database();  
      $this->load->model('Users_model');  
      $data['users']=$this->Users_model->select();  
      $data['details'] = $this->Users_model-> get_user($uid) ;

      $this->load->view('view' , $data);  
    }


    public function updatecredit(){
      $id = $this->input->post('id');
      $credit = $this->input->post('credit');
      $transfer_to = $this->input->post('transfer_to');

      $this->load->database();  
         //load the model  
         $this->load->model('Users_model'); 
         $this->Users_model->updatecredit($id , $credit , $transfer_to); 
     // echo $id . $credit . $transfer_to ;

     redirect('./') ;
    
}
}
