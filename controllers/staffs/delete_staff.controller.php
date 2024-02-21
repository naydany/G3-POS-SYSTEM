<?php


require '../../database/database.php';
require '../../models/staff.model.php';


echo $_GET['id'];

$id = $_GET['id'];

$todelete = deleteStaffs($id);

header('Location:/staffs');
