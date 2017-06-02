<?php
$title="";
$content="";

   if (isset($_GET['filename'])){
    $title = $_GET['filename'];
    $content = file_get_contents('posts/'.$_GET['filename']);
    header("location: index.php");
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background: #ecef1a;
        }
        
        #titre {
            width: 400px;
            border-radius: 4px;
            height: 30px;
            border: none;
            padding-left: 50px;
        }
        
        h1 {
            font-family: 'Barrio', cursive;
            font-size: 3em;
        }
        
        textarea {
            border-radius: 4px;
            border: none;
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1>Nouvel article</h1>



<form action="create-file.php" method="POST">
    <p><input type="text" name="titre" id="titre" value="<?php echo $title;?>" /></p>
    <p><textarea rows="20" cols="100" name="message" ><?php echo $content; ?></textarea></p>
    <p><input type="submit" value="submit" name="create" /></p>
</form>


</body>

</html>