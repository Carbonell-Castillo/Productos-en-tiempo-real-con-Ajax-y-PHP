<?php
require_once 'db.php';
if (!empty($_POST['product']) && !empty($_POST['supplier']) && !empty($_POST['price']) && !empty($_POST['available'])){
    $product= trim($_POST['product']);
    $supplier= trim($_POST['supplier']);
    $price= trim($_POST['price']);
    $available= trim($_POST['available']);
   
    $total = $price*$available;
   
   
    $insertProduct->execute([
       'producto'=> $product,
       'proveedor'=> $supplier,
       'precio'=> $price,
       'cantidad'=> $available,
       'totall'=> $total
   ]);
   echo 1;   
}else{
    echo 0;
}
 