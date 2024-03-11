<?php
// session_start();
require '../../database/database.php';
require '../../models/item.model.php';
session_start();
$_SESSION['Products'];
if ($_POST['category'] != "") {
    $name_cate = $_POST['category'];
    $_SESSION['Products'] = selectCategory($name_cate);
    header("location: /items");
} 
