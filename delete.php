<?php
$content = $_GET['filename'];
    if(isset($_GET['filename']))
    {
   unlink('posts/'.$content);
    }
?>