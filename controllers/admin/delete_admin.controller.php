<?php
require '../../database/database.php';
require '../../models/admin.model.php';


echo $_GET['id'];

$id = $_GET['id'];

$todelete = deleteAdmin($id);

header('Location:/admin_table');
