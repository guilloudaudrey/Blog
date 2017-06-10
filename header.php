<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    
</head>

<body>
<?php 
    session_start();
    if (!isset($_SESSION['nom'])){?>
    <header>
        <form action="login.php" method="POST" class="formulaire">
        <label for="name">Username</label>
        <input type="text" name="pseudo">
        <label for="pass">Password</label>
        <input type="password" name="mdp">
        <input type="submit" name="action" value="Login">
    <a href="inscription.html">S'inscrire</a>
    </form>
    <nav>
     <ul class="menu">
         <li><i class="fa fa-bars fa-2x" aria-hidden="true"></i></li>
            <ul>
                <li ><a href="create.php">Nouvel article</a>
                <li ><a href="index.php">Index</a>
            </ul>
    </ul>
    </nav>
    </header>
    
<?php
    } else {
        echo '<header>Bonjour !'.' '.$_SESSION['nom'].' ';
        echo '<form action=logout.php method="POST"><button>se déconnecter</button></form></header>';

    }
    ?>


<script src="https://use.fontawesome.com/0df17449bf.js"></script>
</body>

</html>