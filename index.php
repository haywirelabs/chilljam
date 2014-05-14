<!DOCTYPE html>
<html>
<head>
<title>Chilljam.com Repository</title>
</head>
<body>

<h1>Chilljam.com Repository</h1>


<?php

$path = realpath('/home/hedgehog001/chilltheuniverse.com/wp-content/uploads');

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
    echo $name + "</br>";
}

?>
</body>
</html>