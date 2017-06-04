<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
        </style>
</head>
<body>
    <h1>Mon Blog</h1>
    <?php
$dossier = 'posts/';
$files = scandir($dossier); 
foreach($files as $content){
    if (!is_dir($content)) {
    echo '<h3>'.basename($content, ".txt").'</h3>';
    echo file_get_contents($dossier.$content);
echo'
    <form method="POST" action="delete.php">
        <input type="hidden" name="filename" value="'.$content.'">
        <input type="submit" value="delete">
        </form>';
        echo'
        <form method="POST" action="create.php">
        <input type="hidden" name="filename" value="'.$content.'">
        <input type="submit" value="edit">
        </form>';
     }
} ?>

</body>
</html>


