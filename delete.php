<?php
$content = htmlspecialchars($_POST['filename']);
    if(isset($_POST['filename']))
    {
   unlink('posts/'.$content);
   header("location: index.php");
    }
?>
