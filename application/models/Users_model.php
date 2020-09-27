
<?php
/**
 * Description of Export Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

  function __construct()
  {
    // Call the Model constructor  
    parent::__construct();
  }
  //we will use the select function  
  public function select()
  {
    //data is retrive from this query  
    $query = $this->db->get('users');
    return $query;
  }

  public function get_user($slug)
  {

    $query = $this->db->get_where('users', array('id' => $slug));
    return $query;
  }

  public function updatecredit($id, $credit, $to)
  {

    $query = $this->db->get_where('users', array('id' => $id));
    $row = $query->row_array();
    $credit1 = $row['credits'];
    
    $query = $this->db->get_where('users', array('id' => $to));
    $row = $query->row_array();
    $credit2 = $row['credits'];
    
    $credit1 = $credit1 - $credit ;
    $credit2 = $credit2 + $credit ;

    $data = array( 
      'credits' => $credit1
   ); 
   
   $this->db->set($data); 
   $this->db->where("id", $id); 
   $this->db->update("users", $data);
  
    $data1 = array( 
      'credits' => $credit2
   ); 
   
   $this->db->set($data1); 
   $this->db->where("id", $to); 
   $this->db->update("users", $data1);


  }
}





?>