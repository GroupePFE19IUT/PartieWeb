<?php
class UEModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }

  public  function  insertion($data){
    $this->db->insert('UE', $data);
    $this->db->reset_query();
  }

  public function listerUE()
  {
    $query  = $this->db->select('Code_UE')
                          ->from('UE')
                          ->where("statutUE= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
