<?php

class Modele{


	protected $pdo;
	private $table;


	public function __construct ($serveur, $bdd, $user, $mdp){
			$this->pdo = null;
			//$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		try {

			$this->pdo = new PDO("mysql:host=$serveur; dbname=$bdd;", $user, $mdp);
			//$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
				//$pdo->execute("SET NAMES 'UTF8'");




			
		} catch (PDOExeption $exp) {
			//echo "connexion impossible à :" .$serveur."/".$bdd;
			  echo "Erreur!: " . $e->getMessage() . "<br/>";
			die();

		}
	

}



	public function setTable($table){
		$this->table=$table;
	}

	public function selectAll(){

		$requete = "select * from " .$this->table.";";

		//si co pdo est null() retourne null
		if($this->pdo != null){
			$select = $this->pdo->prepare($requete);
			$select->execute();
			$resultats = $select->fetchAll();
			return $resultats;

		}else {
			return null;
		}
	}

	/*public function select(){

		$req = "select".$this-> 
	}*/

	public function insert ($tab){

			$champs = array();
			$donnees = array();
			$valeurs = array();
			
			foreach($tab as $cle=>$valeur)
			{
				$champs[]=$cle;
				$valeurs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeChamps = implode(",", $champs);
			$listeDonnees = implode(",", $valeurs);
			
			$requete = "insert into ".$this->table." (".$listeChamps.") values (".$listeDonnees.")";
			$insert = $this->pdo->prepare($requete);
			$insert->execute($donnees);
		}	
	

	public function verifConnexion($where) {
			$clause = array();
			$donnees= array();
			foreach ($where as $cle=>$valeur)
			{
				$clause[]=$cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeClauses = implode (" and ",$clause);
			$requete = "select * from ".$this->table." where ".$listeClauses.";";
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			return $resultat;
		}


		public function verifConnexionFormation($where) {
			$clause = array();
			$donnees= array();
			foreach ($where as $cle=>$valeur)
			{
				$clause[]=$cle."=:".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeClauses = implode (" and ",$clause);
			$requete = "select * from CLIENT where ".$listeClauses.";";
			$select = $this->pdo->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			return $resultat;
		}




	}
	?>		

		
				







			

		
				
