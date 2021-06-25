<?php
class OptionModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }

  public  function  insertion($data){
    $this->db->insert('Option', $data);
    $this->db->reset_query();
  }

  public function listerOption()
  {
    $query  = $this->db->select('Code_Option')
                          ->from('Option')
                          ->where("statutOpt= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
