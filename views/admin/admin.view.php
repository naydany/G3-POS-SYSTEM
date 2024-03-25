
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
    foreach ($num as $getcus) {
        if ($getcus != $current_number) {
            $current_number = $getcus;
            $count = 1;
        } else {
            $count += 1;
        }
    }
}

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
            <h6 class="mr-2 d-none d-lg-inline text-dark text-bold ">Wellcome <span class="text-danger font-weight-bold "><?= $_SESSION['user']['name']; ?></span></h6>
        </div>
    </div>

    <!-- Content Row -->
    <div class="d-flex row justify-content-between">
        <!-- Earnings (Monthly) Card Example 4-->

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

        <!-- Earnings (Monthly) Card Example 3-->
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
        <!-- Earnings (Monthly) Card Example 2-->
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
        <!-- Pending Requests Card Example 1-->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="d-flex rowp-1">
    <!-- Pie Chart -->
    <div class="mt-5 ">
        <?php
        require "models/order.model.php";
        $orders = getOrdersDetail();

        $groupQuantities = [];

        foreach ($orders as $item) {
            $groupName = $item['pro_name'];
            $quantity = $item['pro_qty'];

            if (isset($groupQuantities[$groupName])) {
                $groupQuantities[$groupName] += $quantity;
            } else {
                $groupQuantities[$groupName] = $quantity;
            }
        }

        $labels = [];
        $data = [];
        foreach ($groupQuantities as $groupName => $quantity) {
            $labels[] = $groupName;
            $data[] = $quantity;
        }

        $colors = [];
        for ($i = 0; $i < count($data); $i++) {
            $colors[] = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
        }
        ?>

        <div>
            <div class="card shadow ml-4">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div> -->
                    </div>
                </div>

                <div class="card-body" >
                    <div class="chart-pie">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="text-center small">
                        <?php for ($i = 0; $i < count($labels); $i++) { ?>
                            <span class="">
                                <i class="fas fa-circle" style="color: <?php echo $colors[$i]; ?>"></i> <?php echo $labels[$i]; ?>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var ctx = document.getElementById("myPieChart").getContext("2d");
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: <?php echo json_encode($labels); ?>,
                        datasets: [{
                            data: <?php echo json_encode($data); ?>,
                            backgroundColor: <?php echo json_encode($colors); ?>,
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            });
        </script>
    </div>
    <!-- <table></table> -->
    <div class="ml-3">
        <div class="d-flex mt-1">
            <h1 class="h3 mb-0 text-gray-800" style="margin-left: 500px;">Order Detail</h1><br>
            <p class="text-danger ml-3">
                <select class=" form-control-sm" name="row" id="row">
                    <option>5</option>
                    <option>10</option>
                    <option>25</option>
                    <option>40</option>
                    <option>60</option>
                    <option>80</option>
                    <option>100</option>
                </select>

        </div>
        <div style="height: 400px; overflow: auto;">
            <table class="table bg-white text-black text-center">
                <thead class="text-white bg-primary rounded">
                    <tr>
                        <th>ID</th>
                        <th>P_Name</th>
                        <th>Uni_Price</th>
                        <th>Quantity</th>
                        <th>Total_price</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody id="orderTableBody">
                    <?php

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

            <script>
                function getSelectedRows() {
                    return localStorage.getItem('selectedRows') || 5;
                }


                function setSelectedRows(value) {
                    localStorage.setItem('selectedRows', value);
                }


                document.addEventListener('DOMContentLoaded', function() {
                    var selectedRows = getSelectedRows();
                    document.getElementById('row').value = selectedRows;
                    updateTableDisplay(selectedRows);
                });


                function updateTableDisplay(selectedRows) {
                    var tableRows = document.querySelectorAll('#orderTableBody tr');
                    tableRows.forEach(function(row, index) {
                        if (index < selectedRows) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
                document.getElementById('row').addEventListener('change', function() {
                    var selectedRows = parseInt(this.value);
                    setSelectedRows(selectedRows);
                    updateTableDisplay(selectedRows);
                });
            </script>
        </div>
    </div>
</div>
</div>