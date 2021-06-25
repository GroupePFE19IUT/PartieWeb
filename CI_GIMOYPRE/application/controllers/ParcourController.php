
<?php

  class ParcourController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->model('ParcourModele');
      $this->load->model('DepartementModele');
    }
    public function index()
    {
      $data['titre'] = "Parcour";
      $data['Departement']= $this->DepartementModele->listerCode();
      $this->load->view('ParcoursViews',$data);
    }
public function ajouter()
{

    $this->form_validation->set_rules('Code_parcour', 'Code_parcour', 'required' );
    $this->form_validation->set_rules('Code_Departement', 'Code_Departement', 'required' );
    $this->form_validation->set_rules('Intituler_parcour', 'Intituler_parcour', 'required' );
    $this->form_validation->set_rules('niveau_parcour', 'niveau_parcour', 'required' );
  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $Code_parcour = $this->input->post('Code_parcour');
    $niveau_parcour = $this->input->post('niveau_parcour');
    $Intituler_parcour = $this->input->post('Intituler_parcour');
    $Code_Departement = $this->input->post('Code_Departement');
    $tab = array(
                  "Code_Pacour" => $Code_parcour,
                  "Intituler_Parcour"=>$Intituler_parcour,
                  "Niveau_Parcour" => $niveau_parcour,
                  "Code_Departement"=>$Code_Departement
                );

    $result=$this->ParcourModele->insertion($tab);
    $data['Departement']= $this->DepartementModele->listerCode();
    $data['titre'] = "parcours";
    $this->load->view('ParcoursViews',$data);
  }

  else {
    $data['message'] = 'verifier  Vos valuer';
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
