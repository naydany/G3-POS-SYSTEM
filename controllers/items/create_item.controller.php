<?php 
require 'database/database.php';
require 'models/item.model.php';

// Catch datas categories
$categories = countNameCategory();
$suppliers = countNameSuppliers();

require 'views/items/form_create_product_view.php';
