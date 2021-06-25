
<?php

  class EtudiantController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {
    private $i;
  public  function __construct()
    {
      parent::__construct();
      $this->load->model('EtudiantModel');
      $this->i = $this->i + $this->i;
    }

    public function index()
    {
      $data['titre'] = 'Enregistrement';
      $this->load->view('InscriptionViews');
    }

public function ajouter()
{

$this->form_validation->set_rules('nom', 'nom', 'required|max_length[44]' );
$this->form_validation->set_rules('telephone', 'telephone', 'required|min_length[9]' );
$this->form_validation->set_rules('date_de_naissance', 'date_de_naissance', 'required|min_length[10]' );
$this->form_validation->set_rules('prenom', 'prenom');
$this->form_validation->set_rules('email', 'email', 'required|valid_email' );
$this->form_validation->set_rules('lieu_de_naissance', 'lieu_de_naissance', 'required' );
$this->form_validation->set_rules('sexe', 'sexe', 'required' );
$this->form_validation->set_rules('photo', 'photo', 'required' );


  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $nom = $this->input->post('nom');
    $telephone = $this->input->post('telephone');
    $date_de_naissance = $this->input->post('date_de_naissance');
    $prenom = $this->input->post('prenom');
    $email = $this->input->post('email');
    $lieu_de_naissance = $this->input->post('lieu_de_naissance');
    $sexe = $this->input->post('sexe');
    $Photo = $this->input->post('photo');
    $matricule= 'CM-UDS-'. date('y').'IUT-'. rand(1, 1000). $this->i;
    $tab = array(
                  "Matricule" => $matricule,
                  "Nom"=>$nom,
                  "prenom"=>$prenom,
                  "Sexe"=>$sexe,
                  "Telephone"=>$telephone,
                  "Lieu_naiss"=>$lieu_de_naissance,
                  "Date_de_naissance"=>$date_de_naissance,
                  "Email"=>$email,
                  "Photo"=>$Photo
                );
    $this ->EtudiantModel->insertion($tab);
    $data['titre']  = 'Inscription';
    $this->load->view('InscriptionViews');

  //  $data['Etudiant']= $this->PersonnelModel->lister();
  }

  else {
    $data['message'] = 'verifier  Vos valuer';
    $this->load->view('InscriptionViews',$data);

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
