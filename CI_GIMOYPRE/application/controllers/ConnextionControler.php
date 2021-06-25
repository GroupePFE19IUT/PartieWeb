
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class ConnextionControler extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {
  public  function __construct()
    {
      parent::__construct();
      $this->load->model('ConnectionModel');
    }

    public function index()
    {
      $data['titre']="Connexion";
      $this->load->view('ConnexionViews', $data);
    }
    public function dash()
    {
      $data['titre']="Tableau de Bord";
      $this->load->view('dashboard',$data);
    }

    public function Connection()
    {

      $this->form_validation->set_rules('login', 'login', 'required' );
      $this->form_validation->set_rules('password', 'password', 'required|min_length[8]' );

      if ($this->form_validation->run() ==  TRUE)
       {
      $data['message'] = 'ok';
      //code pour l'insertion dans la base de donnee
        $login= $this->input->post('login');
        $password1 = $this->input->post('password');
/* ici l'objectif est de chiffre le mots de pass recu du formulaire puis
selectionner le mots de pass deja chiffre dans la base de donnees
 s'il  sont identitique on le laisse passer dans le cas contraire non*/
        $pass = md5($password1);/* chiffrement du mots de passe recu*/

        $pass2 = $this->ConnectionModel->selectionpass($login);/*ici on stock le resultat de de la selection du mots de passe */
        $passe = $pass2[0];
        $pas = $passe['Password'];

        if($pass == $pas){
          $data['titre']  = 'tableau de Bord';
          $this->load->view('dashboard',$data);
        }
        else{
          echo "string";
        }
    }
  }

public function ajouter()
{

$this->form_validation->set_rules('login', 'login', 'required|max_length[44]' );
$this->form_validation->set_rules('password', 'password', 'required|min_length[8]' );
$this->form_validation->set_rules('verifpassword', 'verifpassword', 'required|min_length[8]' );

  if ($this->form_validation->run() ==  TRUE)
   {
  $data['message'] = 'ok';
  //code pour l'insertion dans la base de donnee
    $login = $this->input->post('login');
    $password = $this->input->post('password');
    $passwordbd = md5($password);
    $tab = array(
                  "Login_users" => $login,
                  "Password"=>$passwordbd
                );
               var_dump($tab); //verifier  le  tableau
    $this ->ConnectionModel->insertion($tab);
    $data['message']  = 'Inscription reussie';
    $this->load->view('InscriptionViews');
    $data['Etudiant']= $this->PersonnelModel->lister();
  }

  else {
    $data['message'] = 'verifier  Vos valuer';
    $this->load->view('InscriptionViews',$data);

  }

}

}
 ?>
