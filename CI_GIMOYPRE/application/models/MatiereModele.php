<?php
  /**
   *
   */
  class MatiereModele extends CI_Model
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->database("db");
    }
    public  function  insertion($data){
      $this->db->insert('Matiere', $data);
      $this->db->reset_query();
    }
    public function listerMatier()
    {
      $query  = $this->db->select('CODEM')
                            ->from('Matiere')
                            ->where("statutM= actif")
                            ->get();
                      return $query->result_array();
    }

    public function lister()
    {
      $query  = $this->db->select('*')
                            ->from('Matiere')
                            ->where("statut= actif")
                            ->get();
                      return $query->result_array();
    }
    public function updatpersonnel($id,$tab)
    {
      // code...de  mise  a jour  personnel
      $query  = $this->db->where('id',$id)
                          ->update('personnel',$tab);
                $this->db->reset_query();
                return  $query;
    }
  }


 ?>
