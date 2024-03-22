<?php
require "../../database/database.php";
require "../../models/category.model.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['category'] !== '' && $_POST['description'] !== '' ) {
        $category = htmlspecialchars($_POST["category"]);
        $description = htmlspecialchars($_POST['description']);

        $add = createCategory($category, $description);
        header("Location:/categories");
        $_SESSION['success']  = "Add new category was succesefully";
    } else {
        $_SESSION['error'] = "Please file all form";
        header("Location:/categories");
    }
}
