<?php
session_start();
require '../../database/database.php';
require '../../models/update_profile.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgProfile = $_FILES['imageprofile'];
    // Catch user id of the account
    $userID = $_SESSION['user']['id'];

    if (!empty($imgProfile)) {

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

            // Call function in models of database to change profile
            changeProfile($userID, $nameInDB);
        }
    }
}
