<?php
require 'database/database.php';
require 'models/staff.model.php';
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    
    $staff = editeStaff($id);
    // var_dump($staff);
}
 require 'views/staffs/form_update_staff.view.php';

