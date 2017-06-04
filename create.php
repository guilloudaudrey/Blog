<?php
$title="";
$content="";

   if (isset($_POST['filename'])){
    $title = basename($_POST['filename'], ".txt");
    $content = file_get_contents('posts/'.$_POST['filename']);
    }  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <title>Document</title>
    <style>

@font-face {
  font-family: 'AlbertsthalTypewriter';
  src: url('fonts/AlbertsthalTypewriter.eot?#iefix') format('embedded-opentype'),  url('fonts/AlbertsthalTypewriter.woff') format('woff'), url('fonts/AlbertsthalTypewriter.ttf')  format('truetype'), url('fonts/AlbertsthalTypewriter.svg#AlbertsthalTypewriter') format('svg');
  font-weight: normal;
  font-style: normal;
}
        body {
            text-align: center;
            background: #ecef1a;
        }
        
        #titre {
            width: 50%;
            border-radius: 4px;
            height: 30px;
            border: none;
            padding-left: 20px;
            font-family: 'AlbertsthalTypewriter';
            font-size : 1.3em;
            outline: none;
            text-transform : uppercase;
        }
        
        h1 {
          font-family: 'Permanent Marker', cursive;
            font-size: 3em;
       
        }
        
        textarea {
            border-radius: 4px;
            border: none;
            padding: 50px;
            font-family: 'AlbertsthalTypewriter';
            font-size: 1em;
            width : 70%;
            height : 300px;
             outline: none;
        }

        #submit{
            font-family: 'Permanent Marker', cursive;
            height: 40px;
            text-align: center;
            width: 130px;
            border-radius:40px;
            background: black;
            color:white;
            letter-spacing:1px;
            text-shadow:0;
        }

          #submit:hover{
              background: grey;
          }


    </style>
</head>

<body>
    <h1>Nouvel article</h1>



<form action="create-file.php" method="POST">
<div id="machine">
    <p><input type="text" name="titre" id="titre" value="<?php echo $title;?>" /></p>
    <p><textarea name="message" ><?php echo $content; ?></textarea></p>
    <p><input type="submit" value="submit" name="create" id="submit" /></p>
</form>


</body>

</html>