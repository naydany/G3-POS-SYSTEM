<?php
 require "database/database.php";
 require "models/item.model.php";
 $categories = countNameCategory();
$suppliers = countNameSuppliers();
require "views/items/item.view.php";