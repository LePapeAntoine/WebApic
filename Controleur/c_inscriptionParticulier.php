<?php
require_once './Modele/model.class.php';
session_start();

class inscriptionParticulier{

	private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("PARTICULIER");
		}
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function insert($tab){
			return $this->unModele->insert($tab);
		}

}

$unModel = new inscriptionParticulier('db730661205.db.1and1.com','db730661205','dbo730661205','Apicweb123!');

//$unModel = new inscriptionParticulier('localhost','db730661205','root','');

$donnees = $unModel->selectAll();


	if(isset($_POST["submit"])){

		$tab = array('NOMPARTICULIER' => $_POST["nomparticulier"],
					'PRENOMPARTICULIER' => $_POST["prenomparticulier"],
					'ADRESSEC' => $_POST["adressec"],
					'TELC' => $_POST["telc"],
					'MAILC' => $_POST["mailc"],
					'MDPC' => $_POST["mdpc"]
					
		 );
		
		$inserer = $unModel->insert($tab);
	}

require './Vue/v_inscriptionParticulier.php';



?>