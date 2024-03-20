<?php
session_start();
require '../../database/database.php';
require '../../models/staff.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['cas_id'] !== '' && $_POST['name'] !=='' && $_POST['number'] !=='' && $_POST['email'] !=='' && $_POST['address'] !=='') {
        $name = htmlspecialchars($_POST['name']);
        $number = htmlspecialchars($_POST['number']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $id = htmlspecialchars($_POST['cas_id']);
        
        $update = updateStaffs($id, $name, $number, $email, $address);

        header('location:/staffs');
    }
}
