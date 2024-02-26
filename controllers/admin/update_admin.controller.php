<?php
require '../../database/database.php';
require '../../models/admin.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['id'] !== '' && $_POST['name'] !=='' && $_POST['email'] !=='' && $_POST['password'] !=='' && $_POST['address'] !=='') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $id = $_POST['id'];
        
        $update = updateAdmin($id, $name, $email, $password, $address);

        header('location:/admin_table');
    }
}