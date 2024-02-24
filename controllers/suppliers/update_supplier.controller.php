<?php
require '../../database/database.php';
require '../../models/supplier.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['sup_id'] !== '' && $_POST['name'] !=='' && $_POST['country'] !=='' && $_POST['address'] !=='') {
        $name = $_POST['name'];
        $country = $_POST['country'];
        $address = $_POST['address'];
        $id = $_POST['sup_id'];
        
        $toUpdate = updateSupplier($id, $name, $country, $address);

        header('location:/suppliers');
    }
}