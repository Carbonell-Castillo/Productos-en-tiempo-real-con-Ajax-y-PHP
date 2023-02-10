<?php
    require_once 'credentials.php';

    try{
        $db= new PDO('mysql:host=' . DB_SERVER . ';dbname=' .DB_NAME .';', DB_USER, DB_PASS);
        
    }catch(PDOException $e){
        print "Error en la base de datos: " . $e->getMessage(). "<br/>";
        die();
    }

    //Insertar productos
    $insertProduct = $db->prepare("
    INSERT INTO product(product, supplier, price, available, total)
    values(:producto, :proveedor, :precio, :cantidad, :totall);
    ");
    

    //Ver productos
    $seeProducts = $db->prepare("
    SELECT * FROM product;
    ");

    $seeProducts->execute();

    //Eliminar productos
    $deleteProducts=$db->prepare("
    DELETE FROM product WHERE id=:identificador;
    ");