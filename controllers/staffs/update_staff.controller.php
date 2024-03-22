<?php
session_start();
require '../../database/database.php';
require '../../models/staff.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['cas_id'] !== '' && $_POST['name'] !=='' && $_POST['phone'] !=='' && $_POST['email'] !=='' && $_POST['address'] !=='' && $_POST['role'] !=='') {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $id = htmlspecialchars($_POST['cas_id']);
        $role = htmlspecialchars($_POST['role']);
        $phone = htmlspecialchars(preg_replace('/[^0-9]/', '', $phone));
        
        $update = updateStaffs($id, $name, $phone, $email, $address, $role);

        header('location:/staffs');
    }
}
