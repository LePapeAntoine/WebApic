<?php
require './Modele/model.class.php';
session_start();
$_SESSION['NUMEROC'] = $req;

class Connexion 
{
	private $unModele;

	
	public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("CLIENT");
		}
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function insert($tab){
			return $this->unModele->insert($tab);
		}
		public function verifConnexion($where) {
			return $this->unModele->verifConnexion($where);
		}


}
	$unModel = new Connexion("db730661205.db.1and1.com","db730661205","dbo730661205","Apicweb123!");

	//$where = array("MAILC"=>"de","MDC"=>"de");
	
	//$resultats = $unModel->verifConnexion($where);
	//var_dump($resultat);

	//include("./Vue/v_connexion.php");
	

	if(isset($_POST['submitco'])){
		$where =array('MAILC'=>$_POST['email'],
						'MDPC'=>$_POST['password']);

		$unModel = new Connexion("db730661205.db.1and1.com","db730661205","dbo730661205","Apicweb123!");
		$resultat = $unModel->verifConnexion($where);
		
		if(isset($resultat['MAILC'])){
			echo "<h3>Vous êtes maintenant connecté à l'adresse :  ". $resultat['MAILC']."</h3>";

			$_SESSION['data'] = $resultat['NUMEROC'];
			$_SESSION["mail"] = $resultat['MAILC'];	

			//print_r($_SESSION);	
		}else{
			echo "<br/><h3>Erreur de connexion, vérifiez vos identifiants</br></h3>";
			session_destroy();		}
	}

	

	




require './Vue/v_connexion.php';

?>