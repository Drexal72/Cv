<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=php-cv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom,prenom,dateNaissance,adresse FROM coordonnes');

while ($donnees = $reponse->fetch()) {
	echo $donnees["nom"] . '<br />';
	echo $donnees["prenom"] . '<br />';
	echo $donnees["dateNaissance"] . '<br />';
	echo $donnees["adresse"] . '<br />';
}

$reponse->closeCursor();
