<!DOCTYPE html>
<html>
<head>
<title>Chilljam.com Repository</title>
</head>
<body>

<h1>Chilljam.com Repository</h1>

<?php

$path = realpath('content');

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
  if(substr($name, -1) != "."){
    $filePath = explode("/", $name);
    unset($filePath[0]);
    unset($filePath[1]);
    unset($filePath[2]);
      echo "$name "."</br>";
      echo "<pre>";
      var_dump($filePath);
      echo "</pre>";
  }
}

?>
</body>
</html>