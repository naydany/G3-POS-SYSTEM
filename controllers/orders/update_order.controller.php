<?php
require "models/item.model.php";
require "database/database.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $products = getItemID($id );
}
require 'views/orders/updete_order.view.php';