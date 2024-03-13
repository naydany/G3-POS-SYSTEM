<?php
session_start();
require '../../database/database.php';
require '../../models/update_profile.model.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['user']['id'];
    $imgProfile = $_FILES['image'];
    // Image upload
    $directory = "../../assets/images/";
    $target_file = $directory . '.' . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $checkImageSize = getimagesize($_FILES["image"]["tmp_name"]);
    if ($checkImageSize) {
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $_SESSION['error'] = "Wrong Image extension!";
            header('Location: /signup');
        } else {

            $imageExtension = explode('.', $target_file)[6];
            $newFileName = uniqid();
            $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
            $nameInDB = $newFileName . '.' . $imageExtension;
            move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);
            $_SESSION['user']['image'] = $nameInDB;
            uploadProfile($userId, $nameInDB);
            header('Location: /profile');
            $_SESSION['success'] = "Account successfully created";
        }
    }
}
