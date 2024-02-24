
<?php
require '../../database/database.php';
require '../../models/staff.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    echo $name;
    echo $number;
    echo $email;
    echo $password;
    echo $address;


    $add = createStaffs( $name,  $number,  $email,  $password,  $address);

    if ($add ){
        header('Location:/staffs');
    }else{
        header('Location:/create_staffs');
    }
}


