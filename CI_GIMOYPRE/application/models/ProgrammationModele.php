<?php
/**
 *
 */
class ProgrammationModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }

  public  function  insertion($data){
    $this->db->insert('Programmation', $data);
    $this->db->reset_query();
  }

  public function listerparcour()
  {
    $query  = $this->db->select('Code_Pacour')
                          ->from('Parcour')
                          ->where("statutPar= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
