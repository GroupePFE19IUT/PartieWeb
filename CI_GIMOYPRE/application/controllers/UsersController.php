
<?php

  class UsersController extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  public  function __construct()
    {
      parent::__construct();

      $this->load->model('UsersModele');

    }
    public function index()
    {
      $this->load->view('UserViews');
    }

    public function ajouter()
    {

    $this->form_validation->set_rules('loginUSER', 'loginUSER', 'required|max_length[44]' );
    $this->form_validation->set_rules('passwordUser', 'passwordUser', 'required|min_length[8]');
    $this->form_validation->set_rules('verifpassword', 'verifpassword', 'required|min_length[8]');
    $this->form_validation->set_rules('TitreUsers', 'TitreUsers', 'required' );


      if ($this->form_validation->run() ==  TRUE)
       {
      $data['message'] = 'ok';
      //code pour l'insertion dans la base de donnee
        $loginUSER = $this->input->post('loginUSER');
        $passwordUser = $this->input->post('passwordUser');
        $TitreUsers = $this->input->post('TitreUsers');


        $passwordbd = md5($passwordUser);
        $tab = array(
                      "Login_users" => $loginUSER,
                      "Password"=>$passwordbd,
                      "TitreUsers"=>$TitreUsers
                    );
        $this ->UsersModele->insertion($tab);
        $data['message']  = 'Inscription reussie';
        $this->load->view('UserViews');
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
