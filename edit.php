<?php
if (isset($_POST['create'])){
$titre = $_POST['titre'];
$message = $_POST['message'];
$previoustitle = $_POST['previoustitle'];

unlink('posts/'.$previoustitle.'.txt');
$fichier = fopen('posts/'.$titre.'.txt', 'w'); 
fwrite($fichier, $message); 
fclose($fichier); //si on ne ferme pas, fichier en cours d'utilisation'

header("location: index.php");

} else {
    echo'<p>formulaire non envoyé</p>';
}

?>