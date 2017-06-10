<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <?php 
include("header.php");
    ?>
    <h1>Mes articles</h1>
    <?php
        $dossier = 'posts/';
        $files = scandir($dossier); 
        foreach($files as $content){
        if (!is_dir($content)) {
        echo '<section><h3>'.basename($content, ".txt").'</h3>';
        echo '<div class="text">';
        echo file_get_contents($dossier.$content);
        echo '</div>';
        echo'
            <div class="boutons">
            <form method="POST" action="delete.php">
            <input type="hidden" name="filename" value="'.$content.'" class="text">
            <input type="submit" value="delete">
            </form>
    
            <form method="POST" action="create.php">
            <input type="hidden" name="filename" value="'.$content.'">
            <input type="submit" value="edit">
            </form>
            </div>
            
            </section>';
        }
    } ?>

</body>
</html>


