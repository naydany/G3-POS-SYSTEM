<?php
require_once 'database/database.php';
require 'models/category.model.php';
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    
    $cate = editeCategory($id);
}
require 'views/categories/form_update_category.view.php';



