<?php
require_once 'db.php';

$idProduct = $_REQUEST['id'];


$deleteProducts->execute([
    'identificador'=> $idProduct
]);
echo 1;
