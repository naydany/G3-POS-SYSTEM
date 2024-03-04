<?php
require 'database/database.php';
require 'models/admin.model.php';
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    
    $admin = editeAdmin($id);
}
//  require 'views/admin/table_admin.view.php';

