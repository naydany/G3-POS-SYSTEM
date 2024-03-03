
<?php
require '../../database/database.php';
require '../../models/admin.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['number'];
    $role = $_POST['role'];
    $imgProfile = $_FILES['imageprofile'];
    print_r($imgProfile);
    // echo $imgProfile;

    if (!empty($name) && !empty($email) && !empty($password) && !empty($address) && !empty($phone)  && !empty($role)) {

        $directory = "../../assets/images/";
        $target_file = $directory . '.' . basename($_FILES['imageprofile']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($_FILES["imageprofile"]["tmp_name"]);

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"  && $imageFileType != "webp") {
            $_SESSION['error'] = "Wrong Image extension!";
            header('Location: /');
        } else {
            $imageExtension = explode('.', $target_file)[6];
            $newFileName = uniqid();
            $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
            $nameInDB = $newFileName . '.' . $imageExtension;
            move_uploaded_file($_FILES["imageprofile"]["tmp_name"], $nameInDirectory);

            $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
            $admin = accountExist($email);
            if (count($admin) == 0) {
                $add = createAdmin($name, $email, $encryptPassword, $address, $phone, $role, $nameInDB);
                header('Location:/admin_table');
                $_SESSION['success'] = "Account successfully created";
            } else {
                header('Location:/');
                $_SESSION['error'] = "Account already exists";
            }
        }
    } else {
        $_SESSION['error'] = "Not Image file!";
        header('Location: /form_create');
    }
} else {
    $_SESSION['error'] = "Please fill all the fields";
    header('Location: /');
}


// require "views/admin/table_admin.view.php";
