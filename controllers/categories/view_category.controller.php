<?php
require 'database/database.php';
require 'models/category.model.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cate = viewCategory($id);
    $counts = countProductInCategory($id);
    // $counts = countProductInCategory($id);
    $numberOfproduct = 0 ;
    foreach ($counts as $count) {
        $numberOfproduct +=1;
    }
}
require 'views/categories/view_category.view.php';