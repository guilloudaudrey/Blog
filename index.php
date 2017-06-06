<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <style>

        @font-face {
        font-family: 'AlbertsthalTypewriter';
        src: url('fonts/AlbertsthalTypewriter.eot?#iefix') format('embedded-opentype'),  url('fonts/AlbertsthalTypewriter.woff') format('woff'), url('fonts/AlbertsthalTypewriter.ttf')  format('truetype'), url('fonts/AlbertsthalTypewriter.svg#AlbertsthalTypewriter') format('svg');
        font-weight: normal;
        font-style: normal;
        }

        body{
        width: 70%;
        margin: auto;
        }
        h1{
        font-family: 'Permanent Marker', cursive;
        font-size: 3em;
        text-align: center;
        margin-bottom: 100px;
        }

        h3{
        font-family: 'AlbertsthalTypewriter';
            }
        input[type="submit"]{
        margin-top : 20px;
        border-radius : 10px;
        font-size : 1em;
        font-family: 'Permanent Marker', cursive;
}
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


