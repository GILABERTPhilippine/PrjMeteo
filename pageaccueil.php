<?php 

var_dump($_POST);

error_reporting(E_ALL);
ini_set('display_errors','On');

//connexion bdd locale

$test = "host=localhost port=5432 dbname=meteon user=johanna password=gaelle";
// Hachage du mot de passe
//$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$connect = pg_connect($test);
//echo($connect)

$mail=$_POST['mail'];
//$password=$_POST['password'];


//Je vérifie que l'e-mail renseigné est bien dans la base de données.
pg_query("SELECT 'mail'FROM utilisateur WHERE  'mail'='".$mail."';");


$foo = pg_query("SELECT 'mail' FROM utilisateur WHERE  'mail'='".$mail."';");

var_dump($foo);

pg_close($connect);
//le bouton connexion ne fonctionne pas



?>