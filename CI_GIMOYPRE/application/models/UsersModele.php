<?php
class UsersModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }

  public  function  insertion($data){
    $this->db->insert('Users', $data);
    $this->db->reset_query();
  }

  public function listerUsers()
  {
    $query  = $this->db->select('*')
                          ->from('user')
                          ->where("statutUE= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
