<?php
require './Modele/conectbdd.php';
require './Vue/vue_compte.php';

	class CreaCompte{

		
		private $nom ,$prenom,$pass,$passConfirm,$adresse,$Tel,$mail,$success,$erreur;

//On initialise les données
		public function __construct(){
			$this->nom="";
			$this->prenom="";
			$this->pass="";
			$this->passConfirm="";
			$this->adresse="";
			$this->Tel="";
			$this->mail="";
			$success="";
			$erreur=0é
		}
	}

	if (isset($_POST['enregistrer'])){
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$pass=$_POST["pass"];
		$passConfirm=$_POST["passComfirm"];
		$adresse=$_POST["adresse"];
		$Tel=$_POST["Tel"];
		$mail=$_POST["mail"];

		if($erreur==0){

			
			$req=$bdd->querry("INSERT INTO particulier (NOMPARTICULIER,PRENOMPARTICULIER,ADRESSEC,TELC,MAILC,MDPC) VALUES (".$nom.",".$prenom.",".$adresse.",".$Tel.",".$mail.",".$pass.") ");
			$success = "/br><span> L'enregistrement à été effectué</span></br>";
		}
	}
?>