
<?php
require '../../database/database.php';
require '../../models/admin.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['address']) && !empty($_POST['role'])) {
        $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
        $admin = accountExist($email);
        if (count($admin) == 0) {
            $add = createAdmin($name, $email, $encryptPassword, $address, $role);
            header('Location:/admin_table');
            $_SESSION['success'] = "Account successfully created";
        } else {
            header('Location:/');
            $_SESSION['error'] = "Account already exists";
        }
    }
} else {
    $_SESSION['error'] = "Please fill all the fields";
    header('Location: /');
}


// require "views/admin/table_admin.view.php";
