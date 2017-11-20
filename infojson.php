<?php
  $path = 'json/in/rendered/';
  foreach (new DirectoryIterator($path) as $file) {
    if ($file->isFile()) {
        echo("<option>" . $file-> getFileName() . "</option>");
    }
  }
?>
