<?php
/**
 *
 */
class DepartementModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }
  public  function  insertion($data){
    $this->db->insert('Departement', $data);
    $this->db->reset_query();
  }
  public function listerCode()
  {
    $query  = $this->db->select('Code_Derpartement')
                          ->from('Departement')
                          ->where("statusDep= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
