<?php
  header('Content-Type: application/json');
  $str = file_get_contents("json/in/rendered/" . $_POST['file']);
  echo($str);
?>
