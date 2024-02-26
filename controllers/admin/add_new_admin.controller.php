
<?php
require '../../database/database.php';
require '../../models/admin.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    echo $name;
    echo $email;
    echo $password;
    echo $address;


    $add = createAdmin( $name, $email, $password, $address);

    if ($add ){
        header('Location:/admin_table');
    }else{
        header('Location:/form_admin');
    }
}
require "views/admin/table_admin.view.php";