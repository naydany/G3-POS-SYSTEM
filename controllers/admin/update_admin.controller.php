<?php
require '../../database/database.php';
require '../../models/admin.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) &&!empty($_POST['address'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        // $password = $_POST['password'];
        $address = $_POST['address'];
        $id = $_POST['id'];
        
        $update = updateAdmin($id, $name, $email, $address);

        header('location:/admin_table');
    }else{
        // header('location:/admin_table');
    }
}