<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=php-cv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT annee,filiere,diplome,localisation FROM formation');

while ($donnees = $reponse->fetch()) {
	echo $donnees["annee"] . '<br />';

	echo $donnees["filiere"] . '<br />';
	echo $donnees["diplome"] . '<br />';
	echo $donnees["localisation"] . '<br />';
	echo '<br />';

}

$reponse->closeCursor();
