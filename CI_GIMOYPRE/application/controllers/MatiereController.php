<?php

  class MatiereController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {
  public  function __construct()
    {
      parent::__construct();
      $this->load->model('MatiereModele');// chargement du modele
      $this->load->model('UEModele');// ici on importe le modele UEModele pour pourvoir fair une requete de selection des different modele qui permettrons l'insertion dune Matiere
    }

    public function index()// fonction qui est premierement appeller pour charger le modele la views modele
    {
      $data['titre'] = "Matiere";// definition du titre de la page dans une vairiable elle sera esploiter plus tard
      $data['UE']= $this->UEModele->listerUE();/*la listeUE nous retourne la liste des UE enregistre dans notre bd elle est Stocker dans la variable UE qui sera transmise a la vue pour exploitaion*/
      $this->load->view('MatiersViews',$data);// chargement de la vues MatiersViews
    }

public function ajouter()
/*fonction d'ajout d'une matiere en base de donnees */
{

$this->form_validation->set_rules('CODEM', 'CODEM', 'required|max_length[44]' );
$this->form_validation->set_rules('IntitulerM', 'IntitulerM', 'required|min_length[5]' );
$this->form_validation->set_rules('TI', 'TI', 'required|min_length[1]' );
$this->form_validation->set_rules('CMJ', 'CMJ','required');
$this->form_validation->set_rules('TP', 'TP', 'required' );
$this->form_validation->set_rules('NBC', 'NBC', 'required' );
$this->form_validation->set_rules('TD', 'TD', 'required' );
$this->form_validation->set_rules('Code_UE', 'Code_UE', 'required' );
/* le form_validation permet de verifier la conformiter des information avant de les exploiters
nous avons les option 'required pour signifier que le champ est obligatoire'
min et max_length pour specifier la taille des carractere du champ
*/


  if ($this->form_validation->run() ==  TRUE)
  /* ici on verie que tous les champs sont conforme */
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
  /*recuperation des valeurs du formulaire et affectation aux variables */
    $CODEM = $this->input->post('CODEM');
    $IntitulerM = $this->input->post('IntitulerM');
    $TI = $this->input->post('TI');
    $CMJ = $this->input->post('CMJ');
    $TP = $this->input->post('TP');
    $NBC = $this->input->post('NBC');
    $TD = $this->input->post('TD');
    $Code_UE = $this->input->post('Code_UE');
    $total = $TI + $TP + $TD + $CMJ;
/* chargement du tab pour la passe en parametre lors de l'execution de la requette d'insertion */
    $tab = array(
                  "CODEM" => $CODEM,
                  "IntitulerM"=>$IntitulerM,
                  "TI"=>$TI,
                  "CMJ"=>$CMJ,
                  "TP"=>$TP,
                  "NBC"=>$NBC,
                  "TD"=>$TD,
                  "Code_UE"=>$Code_UE,
                  "Total"=>$total


                );
               //var_dump($tab); //verifier  le  tableau
    $this ->MatiereModele->insertion($tab); /* appel du modele, la fonction d'insertion et passage des parametre */
    $data['titre']  = 'Dashboard';
    $data['UE']= $this->UEModele->listerUE();
    $this->load->view('MatiersViews',$data);/* chargement de la views apres excution de la requette */

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
