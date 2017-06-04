<?php
$content = $_POST['filename'];
    if(isset($_POST['filename']))
    {
   unlink('posts/'.$content);
   header("location: index.php");
    }
?>
