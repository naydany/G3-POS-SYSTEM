<?php
require_once 'database/database.php';
require_once 'models/item.model.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pro = getItemID($id);
}
require 'views/items/edit_item.view.php';



