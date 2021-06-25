<?php

  class PresenceControler extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  private $nombrelimite;
  public  function __construct()
    {
      parent::__construct();
      $this->load->model('PresenceModele');// chargement du modele
    }

    public function index()// fonction qui est premierement appeller pour charger le modele la views modele
    {
      $nombrefoisprogrammer;
      $data['titre'] = "Presence";// definition du titre de la page dans une vairiable elle sera esploiter plus tard
     /* appel du modele, la fonction pour selectionner les etudiants  et les matierers de la BD */
      $etudiants = $this->PresenceModele->ListeEtudiants();
      $Matieres = $this->PresenceModele->ListeMatieres();
var_dump($Matieres);
var_dump($etudiants);


      foreach ($Matieres as $Matiere) {
          /*on compte le nombre de fois qu'une matieres a ete programmer */
          /*on recupere l'intance de la matiere en cour*/
          var_dump($Matieres[$i]);

          $Matiere= $Matieres[$i];
          $nombrefoisprogrammer = $this->PresenceModele->NombreFoisProgrammer($Matiere);
          /* une fois le nombre de fois compter pour la matiere en cour faut compte le nombre de fois que l'etudiant a participer*/
          for ($j=0; $j <= count($etudiants) ; $j++)
            {
              $Etudiant = $etudiants[$j];
              $nombredeparticipation = $this->PresenceModele->NombreDeParticipation($Matiere,$Etudiant);

              /* ici on comparer le nombre fe fois qu'un etudiant a participer a la matiere programmer premierement si le nombre de fois participer nest pas
              inferieure au nombre de fois programmer ou si le nombre de fois programmer moin le nombre de participation - le nombre de programmation sois inferieure
              au nombre limite d'heure d'absence*/
              if((!($nombredeparticipation < $nombrefoisprogrammer)) or ($nombrefoisprogrammer - $nombredeparticipation) < $nombrelimite)
              {
                  /*on l'ajoute a la liste des etudiants pouvant participer au cc pour la matierer */
                  $tab = array('Matricule_etudiant' =>$Etudiant ,
                                'Matiere' =>$Matiere);
                    $req = $this->PresenceModele->insertioncc($tab);

              }
          }
      }
      /*puis on compte le nombre de matieres pour savoir si un etudiant est eligible a la session normale
      si le nombre de matiere est egale au nombre de fois qu'un matricule apparrair dans la table cc alors il est AUTORISER a participer a la session
      normale*/
      /* etape 1 on compte le nombre de matiers */
      $nombrematieres1 = $this->PresenceModele->NombreMatieres();
       /*etape 2 on liste les etudiants de la table cc */
       $listeetudiantcc = $this->PresenceModele->ListeEtudiantCc();
       /* pour chaque etudiant on vas compter le nombre de fois qu'il apparrair dans la table CC*/
  foreach ($listeetudiantcc as $et) {
       /* on recuperer le matricule en cour */
           $nombredefoistablecc = $this->PresenceModele->NombreDeFoisTableCC($et);

            if ($nombredefoistablecc == $nombrematieres1)
                 {
                  /*on selection ces l'element concernant cette etudiant en base de donnees*/
                  $info = $this->PresenceModele->Info($et);

                  /*puis on l'ajoute au etudiants abmisible a la session normale */
                  $Matricule = $info['Matricule'];
                  $Nom = $info['Nom'];
                  $prenom = $info['prenom'];
                  $Date_de_naissance = $info['Date_de_naissance'];
                  $Lieu_naiss = $info['Lieu_naiss'];
                  $Email = $info['Email'];
                  $option  = $info['option'];
                  $departement = $info['$departement'];
                  $tab = array(
                                "Matricule_etudiant" => $matricule,
                                "Nom_etudiant"=>$nom,
                                "prenom_etudiant"=>$prenom,
                                "Lieu_naiss"=>$lieu_de_naissance,
                                "Date_de_naissance"=>$date_de_naissance,
                                "Email"=>$email,
                                "Option"=>$option,
                                "Departement"=>$departement
                              );

              $requete =  $this->PresenceModele->insertion($tab);
            }
       }


       $data['titre'] = 'Presence';
      //$this->load->view('dashboard',$data);// chargement de la vues MatiersViews
    }

}
 ?>
