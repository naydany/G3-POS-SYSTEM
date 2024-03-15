<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" id="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['success'] ?>
    </div>
<?php
    unset($_SESSION['success']);
endif;
?>
<?php if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" id="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['error'] ?>
    </div>
<?php
    unset($_SESSION['error']);
endif;
?>

<!-- Begin Page Content -->

<?php
$products = getItem();
$customerID = getCustomerID();
$totalPrices =  getPrice();
$allOrders = getOldPayments();
$current_number = "";
$count = 0;

foreach ($customerID as $num) {
    // print_r($num);
    foreach ($num as $getcus) {
        // echo $getcus;
        if ($getcus != $current_number) {
            $current_number = $getcus;
            $count = 1;
        } else {
            $count += 1;
        }
    }
}

// print_r($price);
$totalOrder_price = 0;
foreach ($totalPrices as $totalPrice) {
    $totalOrder_price += $totalPrice['pay_totalprice'];
}
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="bg-">
            <h6 class="mr-2 d-none d-lg-inline text-dark text-bold ">Wellcom <span class="text-danger font-weight-bold"><?= $_SESSION['user']['name']; ?></span> to page <span class="text-danger font-weight-bold"><?= $_SESSION['user']['role']; ?></span></h6>
        </div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $current_number ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($products); ?></div>
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
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo count($allOrders); ?></div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $totalOrder_price; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-coin fa-2x text-gray-300"></i>
                            <!-- <i class="fas fa-tags fa-2x text-gray-300"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-0 text-gray-800">Order Detail</h1><br>
    <table class="table bg-white text-black">
        <thead class="text-white bg-primary">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require "models/order.model.php";
            $orders = getOrdersDetail();
            foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $order['order_detail_id'] ?></td>
                    <td><?= $order['pro_name'] ?></td>
                    <td><?= $order['pro_price'] ?>$</td>
                    <td><?= $order['pro_qty'] ?></td>
                    <td><?= $order['tatal_price'] ?>$</td>
                    <td>
                        <?php if ($order['order_status'] != "Paid" && $order['order_status'] != 1) {
                            echo "<span class='badge badge-danger'>Not Paid</span>";
                        } else {
                            echo "<span class='badge badge-success'>Paid</span>";
                        }
                        ?>
                    </td>
                    <td><?= $order['order_date'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>