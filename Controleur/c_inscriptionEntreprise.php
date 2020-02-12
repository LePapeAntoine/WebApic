<?php
require './Modele/model.class.php';

session_start();

class inscriptionEntreprise{

	private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("ENTREPRISE");
		}
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function insert($tab){
			return $this->unModele->insert($tab);
		}

}

$unModel = new inscriptionEntreprise("db730661205.db.1and1.com","db730661205","dbo730661205","Apicweb123!");
//$unModel = new inscriptionEntreprise("localhost","db730661205","root","");

$donnees = $unModel->selectAll();

	if(isset($_POST["submit"])){
		
		$tab = array('NOMRESPONSABLE' => $_POST["nomresponsable"],
					'NOMENTREPRISE' => $_POST["nomentreprise"],
					'ADRESSEC' => $_POST["adressec"],
					'TELC' => $_POST["telc"],
					'MAILC' => $_POST["emailc"],
					'MDPC' => $_POST["mdpc"],

		 );
		
		$inserer = $unModel->insert($tab);
	}


require './Vue/v_inscriptionEntreprise.php';