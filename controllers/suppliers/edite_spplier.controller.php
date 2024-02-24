<?php
require 'database/database.php';
require 'models/supplier.model.php';
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    
    $supplier = editeSupplier($id);
}
 require 'views/suppliers/update_supplier.view.php';

