<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $add = createSupplier( $name,  $phone, $address);

    if ($add ){
        header('Location:/suppliers');
    }else{
        header('Location:/create_staffs');
    }
}


