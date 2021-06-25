
<?php

  class ProgrammationController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->model('ProgrammationModele');
      $this->load->model('MatiereModele');
    }
    public function index()
    {
      $data['titre'] = "Programmation";
      $data['Matiere']= $this->MatiereModele->listerMatier();
      $this->load->view('ProgrammationViews',$data);
    }
public function ajouter()
{

    $this->form_validation->set_rules('CODEM', 'CODEM', 'required' );
    $this->form_validation->set_rules('HeureDebut', 'HeureDebut', 'required' );
    $this->form_validation->set_rules('Datecour', 'Datecour', 'required' );
    $this->form_validation->set_rules('HeureFin', 'HeureFin', 'required' );
  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $CODEM = $this->input->post('CODEM');
    $HeureDebut = $this->input->post('HeureDebut');
    $Datecour = $this->input->post('Datecour');
    $HeureFin = $this->input->post('HeureFin');
    $tab = array(
                  "CODEM" => $CODEM,
                  "HeureDebut"=>$HeureDebut,
                  "Datecour" => $Datecour,
                  "HeureFin"=>$HeureFin
                );

    $result=$this->ProgrammationModele->insertion($tab);
    $data['Matiere']= $this->MatiereModele->listerMatier();
    $this->load->view('ProgrammationViews',$data);
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
