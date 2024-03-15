<?php


$connection;
global $page;
if ($page == 'controllers/categories/category.controller.php') {
    $current_poge = "category";
} elseif ($page == 'controllers/items/item.controller.php') {
    $current_poge = "search";
} elseif ($page == 'controllers/orders/order.controller.php') {
    $current_poge = "order";
} elseif ($page == 'controllers/payments/payment.controller.php') {
    $current_poge = "oldpayments";
} elseif ($page == 'controllers/staffs/staff.controller.php') {
    $current_poge = "staff";
} elseif ($page == 'controllers/suppliers/supplier.controller.php') {
    $current_poge = "supplier";
} elseif ($page == 'controllers/admin/table_admin.controller.php') {
    $current_poge = "admin";
}
?>
<script src=".././vendor/chart.js/search_category.js"></script>
<script src=".././/vendor/chart.js/search.js"></script>
<script src=".././/vendor/chart.js/search_order.js"></script>
<script src=".././/vendor/chart.js/search_payment.js"></script>
<script src=".././/vendor/chart.js/search_staff.js"></script>
<script src=".././/vendor/chart.js/search_supplier.js"></script>
<script src=".././/vendor/chart.js/search_admin.js"></script>



<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POS SYSTEM<sup>2</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Contains:</h6>
                <a class="collapse-item" href="/categories">Categories</a>
                <a class="collapse-item" href="/items">Items</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/orders">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Order</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/payments">
            <i class="	fab fa-cc-amazon-pay"></i>
            <span>Payments</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Contains:</h6>
                <a class="collapse-item" href="/staffs">staffs</a>
                <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
                <a class="collapse-item" href="/admin_table">admin</a>
                <?php endif; ?>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/suppliers">
            <i class="	fas fa-truck"></i>
            <span>Suppliers</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reports</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Report Contains:</h6>
                <a class="collapse-item" href="/dashboard_report">__detail dashboard</a>
                <a class="collapse-item" href="#">__sale report</a>
                <a class="collapse-item" href="/payment_report">__Payment Report</a>
                
            </div>
        </div>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

             <!-- Topbar Search -->
             <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                 <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" id="<?php echo $current_poge ?>">
                     <div class="input-group-append">
                         <button class="btn btn-primary" type="button">
                             <i class="fas fa-search fa-sm"></i>
                         </button>
                     </div>
                 </div>
             </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                
                 <!-- Nav Item - Alerts -->
                 <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fas fa-bell fa-fw"></i>
                         <!-- Counter - Alerts -->
                         <span class="badge badge-danger badge-counter">3+</span>
                     </a>
                     <!-- Dropdown - Alerts -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                         <h6 class="dropdown-header">
                             Alerts Center
                         </h6>
                         <a class="dropdown-item d-flex align-items-center" href="#">
                             <div class="mr-3">
                                 <div class="icon-circle bg-primary">
                                     <i class="fas fa-file-alt text-white"></i>
                                 </div>
                             </div>
                             <div>
                                 <div class="small text-gray-500">December 12, 2019</div>
                                 <span class="font-weight-bold">A new monthly report is ready to download!</span>
                             </div>
                         </a>
                         <a class="dropdown-item d-flex align-items-center" href="#">
                             <div class="mr-3">
                                 <div class="icon-circle bg-success">
                                     <i class="fas fa-donate text-white"></i>
                                 </div>
                             </div>
                             <div>
                                 <div class="small text-gray-500">December 7, 2019</div>
                                 $290.29 has been deposited into your account!
                             </div>
                         </a>
                         <a class="dropdown-item d-flex align-items-center" href="#">
                             <div class="mr-3">
                                 <div class="icon-circle bg-warning">
                                     <i class="fas fa-exclamation-triangle text-white"></i>
                                 </div>
                             </div>
                             <div>
                               <div class="small text-gray-500">December 2, 2019</div>
                                 Spending Alert: We've noticed unusually high spending for your account.
                             </div>
                         </a>
                         <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                     </div>
                 </li>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = $_POST["name"];
                        }
                        ?>
                       
                        <img class="img-profile rounded-circle" style="object-fit: cover;" src="../assets/images/<?=$_SESSION['user']['image']; ?>">
                        
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="/profile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->