<?php

if (isset($_POST['create'])){
$titre = htmlspecialchars($_POST['titre']);
$message = htmlspecialchars($_POST['message']);

if (!is_dir('posts')){ 
    mkdir('posts');

}

$fichier = fopen('posts/'.$titre.'.txt', 'w'); 
fwrite($fichier, $message); 
fclose($fichier); //si on ne ferme pas, fichier en cours d'utilisation'

echo'<p>Bravo !</p>'; 
header("location: index.php");

} else {
    echo'<p>formulaire non envoyé</p>';
}

?>