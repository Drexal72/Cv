<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=php-cv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT Experiences,Annee FROM experiences');

while ($donnees = $reponse->fetch()) {
	echo $donnees["Experiences"] . '<br />';
	echo $donnees["Annee"] . '<br />';
	echo '<br />';
}

$reponse->closeCursor();
