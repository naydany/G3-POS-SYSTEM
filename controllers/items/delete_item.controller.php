<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

$product_id = $_GET['id'];
$isDeleted = deleteItem($product_id);
header('Location: /items');