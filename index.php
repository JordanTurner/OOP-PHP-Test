<!DOCTYPE html>
<?php
include 'includes/parentclass.inc.php';
include 'includes/newclass.inc.php';

$object = new ParentClass;
?>
<html>
<head>
    <title></title>
</head>
<body>
<?php

echo $object->name();

?>
</body>
</html>
