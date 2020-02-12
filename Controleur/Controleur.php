<?php 
//include('./modele/model.class.php');


class Controleur{

	public function __construct($serveur, $bdd, $user, $mdp){

		$this->unModel = new Modele($serveur, $bdd, $user, $mdp);

	}

	public function setTable($table){

		//appel du modele par le controleur
		 $this->unModel->setTable($table);
	}

	public function selectAll(){

		return $this->unModel->selectAll();
	}
}



?>