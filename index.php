<!DOCTYPE html>
<html>
<head>
<title>Chilljam.com Repository</title>
<link rel="stylesheet" type="text/css" href="cjr.css" media="screen" />
</head>
<body>

<h1>Chilljam.com Repository</h1>

<?php

$path = realpath('/home/hedgehog001/chilltheuniverse.com/wp-content/uploads');

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
      unset($filePath[3]);
      $publish = end($filePath);
      $publishMonth = prev($filePath);
      $publishMonthName = date("F", mktime(0,0,0, $publishMonth, 10));
      $publishYear = prev($filePath);
      $urlPath = 'http://chilljam.com/' . implode('/', $filePath);
      $urlName = end($filePath);
      echo '<p>';
      echo '<a href="' . $urlPath . '" target="blank">' . $urlName . '</a>';
      echo '<span class="byline">';
      echo ' | Published: <strong>' . $publishMonthName . '/' . $publishYear . '</strong></br>';
      echo '</span>';
      echo '</p>';
    }
  }
}

?>
</body>
</html>
