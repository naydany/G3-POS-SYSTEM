<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    echo $name;
    echo $country;
    echo $address;


    $add = createSupplier( $name,  $country, $address);

    if ($add ){
        header('Location:/suppliers');
    }else{
        header('Location:/create_staffs');
    }
}


