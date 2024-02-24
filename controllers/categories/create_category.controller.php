<?php
require "../../database/database.php";
require "../../models/category.model.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['category'] !== '' && $_POST['description'] !== '' ) {
        $category = $_POST["category"];
        $description = $_POST['description'];

        $add = createCategory($category, $description);
        // echo $add;
            header("Location:/categories");
    }else {
        header("Location:/create_form_cate");
    }
}
