<?php
session_start();
require '../../database/database.php';
require '../../models/staff.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $role = htmlspecialchars($_POST['roles']);
    $image = $_FILES['imagestaff'];

    $numericPhoneNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
    $phoneNumberInt = intval($numericPhoneNumber);

    if (!empty($name) && !empty($email) && !empty($password) && !empty($number) && !empty($address) && !empty($role) && !empty($image)) {

        $directory = "../../assets/images/";
        $target_file = $directory . '.' . basename($_FILES['imagestaff']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($_FILES["imagestaff"]["tmp_name"]);

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"  && $imageFileType != "webp") {
            $_SESSION['error'] = "Wrong Image extension!";
            header('Location: /');
        } else {
            $imageExtension = explode('.', $target_file)[6];
            $newFileName = uniqid();
            $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
            $nameInDB = $newFileName . '.' . $imageExtension;
            move_uploaded_file($_FILES["imagestaff"]["tmp_name"], $nameInDirectory);
 
            $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
            $staff = accountExist($email);
            if (count($staff) == 0) {
                createStaffs($name, $phoneNumberInt, $email, $encryptPassword, $address, $role, $nameInDB);
                header('Location: /staffs');
                $_SESSION['success'] = "Account successfully created";
            } else {
                $_SESSION['error'] = "Account already exists";
                header('Location:/staffs');
            }
        }
    } else {
        $_SESSION['error'] = "Please fill all the fields";
        header('Location: /admin');
    }
}
