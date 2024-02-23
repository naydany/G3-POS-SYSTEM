<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

echo $_GET['id'];
$id = $_GET['id'];
$delete = deleteSupplier($id);

header('Location:/suppliers');
