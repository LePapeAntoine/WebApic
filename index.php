<?php
session_start();
require "header.php";



$page = isset($_GET['page']) ? $_GET['page'] :0;

//$uneBdd = new inscriptionParticulier("db730661205.db.1and1.com", "bdd_ppe","dbo730661205","");


switch ($page) {

 case 0: 
    include("Controleur/c_home.php");
  break;

  case 1: 
    include("Controleur/c_home.php");
  break;

  case 2:
    include("Controleur/c_formation.php");
  break;
  case 3 :
    include("Controleur/c_catalogue.php");
  break;

  case 4:
    include("Controleur/c_contact.php");
  break;

  case 5:
    include("Controleur/c_monCompte.php");
  break;

  case 6:
    include("Controleur/c_connexion.php");
  break;

  case 7:
    include("Controleur/c_pageInscription.php");
  break;

  case 8:
    include("Controleur/c_inscriptionParticulier.php");
  break;

   case 9:
    include("Controleur/c_inscriptionEntreprise.php");
  break;

   case 10:
    include("Controleur/c_apropos.php");
  break;

   case 11:
    include("Controleur/c_.php");
  break;

}

  require "footer.php";
?>