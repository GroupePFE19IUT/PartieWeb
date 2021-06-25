<?php
  class UEController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->model('UEModele');
      $this->load->model('OptionModele');
    }
    public function index()
    {
      $data['titre'] = "UE";
      $data['Option']= $this->OptionModele->listerOption();
      $this->load->view('UEViews.php',$data);
    }
public function ajouter()
{

    $this->form_validation->set_rules('Code_UE', 'Code_UE', 'required' );
    $this->form_validation->set_rules('IntitulerUE', 'IntitulerUE', 'required' );
    $this->form_validation->set_rules('Code_Option', 'Code_Option', 'required' );
    $this->form_validation->set_rules('TypeUE', 'TypeUE', 'required' );

  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $Code_UE = $this->input->post('Code_UE');
    $IntitulerUE = $this->input->post('IntitulerUE');
    $Code_Option = $this->input->post('Code_Option');
    $TypeUE = $this->input->post('TypeUE');


    $tab = array(
                  "Code_UE" => $Code_UE,
                  "IntitulerUE"=>$IntitulerUE,
                  "Code_Option" => $Code_Option,
                  "TypeUE" => $TypeUE

                );

    $result=$this->UEModele->insertion($tab);
    $this->load->view('UEViews.php',$data);

  }

  else {
    $data['message'] = 'verifier  Vos valeurs';
  }
}
public function delete()
{
  // code
  if (isset($_GET['id'])) {
    // code...
    $id=  $_GET['id'];
    $tab=array('statut' => '0');
    $delete=$this->PersonnelModel->updatpersonnel($id,$tab);

    $data['titre']  = 'hello  word';
    $data['clients']= $this->PersonnelModel->lister();
    $this->load->view('listingview',$data);


  }
}
public function updat()//
{
if (isset($_GET['id'])) {
  $id = $_GET['id'];

                        }
  $data['titre'] = 'Updatepersonnel';
  $data['clients']=$this->IndexModel->updatpersonnelview($id);
  $this->load->view('updatpersonnelview',$data);



  }

}
 ?>
