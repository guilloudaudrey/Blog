<?php


if(isset($_POST['pseudo']) && isset($_POST['mdp'])){

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$crypt = md5($mdp);
//$crypt2 = sha1($mdp);

if(!is_dir("utilisateur")){
mkdir("utilisateur");
}

$new_file= fopen("utilisateur/".$pseudo.".txt", "w");
fwrite($new_file, $crypt);
fclose($new_file);
echo'<p>Bravo, vous êtes inscrit !</p>'; 
session_start();
$_SESSION['nom'] = $pseudo;
}
header("location: index.php");
echo '<a href="index.php">retour</a>';
   
?>