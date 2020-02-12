<?php
require './Modele/model.class.php';


class Formation{

	
private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("FORMATION");
		}
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function insert($tab){
			return $this->unModele->insert($tab);
		}
		public function verifConnexionFormation($where) {
			return $this->unModele->verifConnexionFormation($where);
		}

}

$unModel = new Formation("db730661205.db.1and1.com","db730661205","dbo730661205","Apicweb123!");
//$donnees = $unModele->selectAll();

if(isset($_POST["submit1"])){


	$where =array('MAILC'=>$_POST['email']);

	

		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 1
						);
			
			$inserer = $unModel->insert($tab);
				echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}

		
	}

if(isset($_POST["submit2"])){


	$where =array('MAILC'=>$_POST['email']);


		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 2
						);
			
			$inserer = $unModel->insert($tab);
			echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}


		
	}

if(isset($_POST["submit3"])){


	$where =array('MAILC'=>$_POST['email']);


		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 3
						);
			
			$inserer = $unModel->insert($tab);
			echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}


		
	}

	if(isset($_POST["submit4"])){


	$where =array('MAILC'=>$_POST['email']);


		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 4
						);
			
			$inserer = $unModel->insert($tab);
			echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}


		
	}
	if(isset($_POST["submit5"])){


	$where =array('MAILC'=>$_POST['email']);


		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 5
						);
			
			$inserer = $unModel->insert($tab);
			echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}

		
	}

	if(isset($_POST["submit6"])){


	$where =array('MAILC'=>$_POST['email']);


		$resultat = $unModel->verifConnexionFormation($where);

		if(isset($resultat['NUMEROC'])){

			$tab = array('NBRPERS' => $_POST["nbrpers"],
						'DATEF' => $_POST["date"],
						'NUMEROC' =>$_SESSION['data'],
						'NUMTYPE' => 6
						);
			
			$inserer = $unModel->insert($tab);
			echo "<h2>Votre choix a été enregistré avec succès ! </h2><br>";
			}
			else
			{
				echo "<h2>Erreur de connexion, vérifiez vos identifiants</h2><br>";
			}


		
	}


require './Vue/v_formation.php';


?>