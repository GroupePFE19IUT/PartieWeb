<?php
/**
 *
 */
class ConnectionModel extends CI_Model
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
  public function selectionpass($data)
  {
    $query  = $this->db->select('Password')
                          ->from('Users')
                          ->where("StatutUS= 'actif' and Login_users=$data")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
