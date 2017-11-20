<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: *");
  header('Access-Control-Allow-Methods: GET, POST');

  $fileName = $_POST['name'];
  file_put_contents ('json/out/rendered/'.$fileName.'.json', $_POST['data']);

  $extendedFilenames = $_POST['extendedFilenames'];
  $extendedData = $_POST['extendedData'];
  $dir = 'json/out/extended/';
  foreach($extendedFilenames as $key => $value){
      file_put_contents ($dir. $value .'.json', $extendedData[$key]);
  }
?>
