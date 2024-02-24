<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $imgProfile = $_FILES['image'];
    $pro_name = $_POST['name'];
    $pro_code = $_POST['code'];
    // $pro_img = $_POST['image'];
    $pro_price = $_POST['price'];
    $pro_cate = $_POST['cate'];
    $pro_quan = $_POST['quantity'];

    // echo $imgProfile;
    if (!empty($pro_name) && !empty($pro_code) && !empty($pro_price) && !empty($pro_cate) && !empty($pro_quan)) {

        $directory = "../../assets/images/";
        $target_file = $directory . '.' . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($_FILES["image"]["tmp_name"]);
        if ($checkImageSize) {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $_SESSION['error'] = "Wrong Image extension!";
                header('Location: /');
            } else {
                $imageExtension = explode('.', $target_file)[6];
                $newFileName = uniqid();
                $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
                $nameInDB = $newFileName . '.' . $imageExtension;
                move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);

                $isCreated = createItem($pro_name, $pro_code, $pro_quan, $nameInDB , $pro_price, $pro_cate);
                if ($isCreated) {
                    header('location: /items');
                } else {
                    header('location: /form_create_pro');
                }
            }
        }else {
            $_SESSION['error'] = "Not Image file!";
            header('Location: /');
        }
    }
}
