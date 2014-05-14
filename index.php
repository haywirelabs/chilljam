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
  $lastChar = substr($name, -1);
  if($lastChar != "."){
    $filePath = explode("/", $name);
    $lastElement = end($filePath);
    if(strpos($lastElement,".")){
      unset($filePath[0]);
      unset($filePath[1]);
      unset($filePath[2]);
      $publish = end($filePath);
      $publishMonth = prev($filePath);
      $publishYear = prev($filePath);
      $urlPath = 'http://localhost:8059/chilljam/' . implode('/', $filePath);
      $urlName = end($filePath);
      echo "<p>";
      echo "Published: <strong>" . $publishMonth . "/" . $publishYear . "</strong></br>";
      echo '<a href="' . $urlPath . '">' . $urlName . '</a></br>';
      echo "</p>";
    }
  }
}

?>
</body>
</html>