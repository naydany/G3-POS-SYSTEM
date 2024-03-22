<?php
session_start();
require_once '../../database/database.php';
require_once '../../models/item.model.php';
require_once '../../models/category.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize user inputs
    $pro_name = htmlspecialchars($_POST['name']);
    $pro_code = htmlspecialchars($_POST['code']);
    $sup_name = htmlspecialchars($_POST['supplier']);
    $pro_price = htmlspecialchars($_POST['price']);
    $pro_cate = htmlspecialchars($_POST['category']);
    $pro_quan = htmlspecialchars($_POST['quantity']);

    // echo $imgProfile;
    if (!empty($pro_name) && !empty($pro_code) && !empty($pro_price) && !empty($pro_cate) && !empty($pro_quan) && !empty($sup_name)) {

        $directory = "../../assets/images/";
        $target_file = $directory . '.' . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($_FILES["image"]["tmp_name"]);

        // Validate uploaded image
        if ($checkImageSize) {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"  && $imageFileType != "webp") {
                $_SESSION['error'] = "Wrong Image extension!";
                header('Location: /form_create');
                exit(); // Terminate script execution after redirection
            } else {
                $imageExtension = explode('.', $target_file)[6];
                $newFileName = uniqid();
                $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
                $nameInDB = $newFileName . '.' . $imageExtension;
                move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);

                // Create item using sanitized inputs
                $isCreated = createItem($pro_name, $pro_code, $pro_quan, $nameInDB, $pro_price, $pro_cate, $sup_name);
                if ($isCreated) {
                    header('location: /items');
                    $_SESSION['success'] = "Add new item was successfully";
                }
            }
        } else {
            $_SESSION['error'] = "Not Image file!";
            header('Location: /itemse');
        }
    } else {
        $_SESSION['error'] = "You need to complete place emty!";
        header('location: /items');
    }
}

