<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

$deleteID = $_GET['id'];
$isDeleted = deleteItem($deleteID);
header("Location: /items");