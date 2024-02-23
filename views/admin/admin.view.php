
<?php if (isset($_SESSION['success'])): ?>
<div class="alert alert-success alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['success'] ?>
  </div>
<?php 
unset($_SESSION['success']);
endif;
?>
<?php if (isset($_SESSION['error'])): ?>
<div class="alert alert-danger alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['error'] ?>
  </div>
<?php 
unset($_SESSION['error']);
endif;
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                CUSTOMERS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300""></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                PRODUCTS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">26</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-bag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ORDERS
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                SALES</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$180</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-0 text-gray-800">Order Detail</h1><br>
    <table class="table bg-white text-black">
        <thead class="bg-primary text-white">
            <tr>
                <th>ORDER DETAIL ID</th>
                <th>CUSTOMER NAME</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th>STATUS</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Doe</td>
                <td>Headphone</td>
                <td>$20</td>
                <td>2</td>
                <td>$40</td>
                <td>Paid</td>
                <td>17/02/2024</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Moe</td>
                <td>Laptop</td>
                <td>$1,000</td>
                <td>2</td>
                <td>$2,000</td>
                <td>Not Paid</td>
                <td>16/02/2024</td>
            </tr>
        </tbody>
    </table>
</div>
