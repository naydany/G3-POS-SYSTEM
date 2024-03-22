<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $pro_name = $_POST['name'];
    $pro_code = $_POST['code'];
    $pro_price = $_POST['price'];
    $pro_cate = $_POST['category'];
    $pro_quan = $_POST['quantity'];
    $pro_original_price = $_POST['original_price'];
    $pro_id = $_POST['id'];
    $imgProfile = $_FILES['imageItem'];

    // echo $imgProfile;
    // var_dump($imgProfile);



    if (!empty ($pro_name) && !empty ($pro_code) && !empty($pro_price) && !empty($pro_cate) && !empty($pro_quan)&& !empty($pro_original_price)&& !empty($imgProfile['name']) ) {

        $directory = "../../assets/images/";
        $target_file = $directory . basename($imgProfile['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($imgProfile['tmp_name']);
        if ($checkImageSize !== false) {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") {
                $_SESSION['error'] = "Wrong Image extension!";
                header('Location: /form_create');
            } else {
                $imageExtension = pathinfo($target_file, PATHINFO_EXTENSION);
                $newFileName = uniqid();
                $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
                $nameInDB = $newFileName . '.' . $imageExtension;
                move_uploaded_file($imgProfile['tmp_name'], $nameInDirectory);

                $isUpdated = updateItem($nameInDB, $pro_name, $pro_code, $pro_price, $pro_quan, $pro_id, $pro_original_price);
                if ($isUpdated) {
                    header('location: /items');
                } else {
                    header('location: /form_create_pro');
                }
            }
        } else {
            $_SESSION['error'] = "Not Image file!";
            header('Location: /form_create');
            exit();
        }
    }

}
