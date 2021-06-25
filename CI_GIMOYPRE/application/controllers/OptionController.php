
<?php

  class OptionController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->model('OptionModele');
      $this->load->model('ParcourModele');
    }
    public function index()
    {
      $data['Parcour']= $this->ParcourModele->listerParcour();
      $this->load->view('OptionViews',$data);
    }
public function ajouter()
{

$this->form_validation->set_rules('Code_Option', 'Code_Option', 'required' );
$this->form_validation->set_rules('IntitulerOption', 'IntitulerOption', 'required' );
$this->form_validation->set_rules('Code_Pacour', 'Code_Pacour', 'required' );


  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $Code_Option = $this->input->post('Code_Option');
    $IntitulerOption = $this->input->post('IntitulerOption');
    $Code_Pacour = $this->input->post('Code_Pacour');
    $tab = array(
                  "Code_Option" => $Code_Option,
                  "IntitulerOption"=>$IntitulerOption,
                  "Code_Parcour" => $Code_Pacour
                );

  $result=$this->OptionModele->insertion($tab);
  $data['Parcour']= $this->ParcourModele->listerParcour();
  $this->load->view('OptionViews',$data);
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
