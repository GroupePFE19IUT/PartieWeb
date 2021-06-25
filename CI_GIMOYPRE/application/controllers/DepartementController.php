
<?php

  class DepartementController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->model('DepartementModele');
    }
    public function index()
    {
      $this->load->view('DepartementViews');
    }
public function ajouter()
{

$this->form_validation->set_rules('Code_departement', 'Code_departement', 'required|max_length[44]' );
$this->form_validation->set_rules('Intituler', 'Intituler', 'required|min_length[4]' );

  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $Code_departement = $this->input->post('Code_departement');
    $Intituler = $this->input->post('Intituler');
    $tab = array(
                  "Code_Derpartement" => $Code_departement,
                  "Intituler"=>$Intituler
                );

    $result = $this->DepartementModele->insertion($tab);
    $data['Departement']= $this->DepartementModele->listerCode();

    }


  else {
    $data['message'] = 'verifier  Vos valuer';
  }

  $data['titre']  = 'Parcour';
  $this->load->view('ParcoursViews',$data);

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
