<?php
$title="";
$content="";

   if (isset($_POST['filename'])){
    $title = htmlspecialchars(basename($_POST['filename'], ".txt"));
    $content = htmlspecialchars(file_get_contents('posts/'.$_POST['filename']));
    }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="stylesheet" href="css/create.css">
    <title>Document</title>
</head>

<body>
    <?php include("header.php"); ?>
    
    <h1>Nouvel article</h1>
    <form action="edit.php" method="POST">
        <p><input type="text" name="titre" id="titre" value="<?php echo $title;?>" placeholder="titre"/></p>
        <input type="hidden" name="previoustitle" value="<?php echo $title;?>"/>
        <p><textarea name="message" ><?php echo $content; ?></textarea></p>
        <input type="submit" value="submit" name="create" id="submit" />
    </form>

</body>

</html>