<?php
require 'database/database.php';
require 'models/category.model.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $cate = viewCategory($id);
    
    $name_category = $cate['cate_name'];
    $counts = countProductInCategory($name_category);

    $numberOfproduct = 0 ;
    foreach ($counts as $count) {
        $numberOfproduct +=1;
    }
}
require 'views/categories/view_category.view.php';