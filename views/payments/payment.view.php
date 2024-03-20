<div class="container">
    <div class="card-header py-3 d-flex justify-content-between ">
        <div class="card-header border-0">
            <a href="/orders" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
                Make A New Order
            </a>
        </div>
        <div class="card-header border-0">
            <a href="controllers/items/notification_item.controller.php" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
                Notification
            </a>
        </div>
        <div class="card-header py-3 d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#paymentForm">
                Start Payment
            </button>
        </div>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th class="text-center">Code</th>
                    <th class="text-center">Products</th>
                    <th class="text-center">Total Price</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $payments = getPayments();
                foreach ($payments as $payment) :
                ?>
                    <tr>
                        <td class="text-center"><?= $payment['pay_code'] ?></td>
                        <td class="text-center"><?= $payment['pro_name'] ?></td>
                        <td class="text-center"><?= $payment['pay_totalprice'] ?></td>
                        <td class="text-center"><?= $payment['pay_date'] ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a onclick="return confirm('Do you want to cancel this payment?')" href="controllers/payments/cancel_payment.controller.php?id=<?= $payment['pay_id'] ?>">
                                    <i class="bi bi-x-circle text-danger btn btn-lg ml-3"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Payment Form -->
    <div class="modal fade" id="paymentForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="d-flex justify-content-center modal-content">
                <div class="card p-5">
                    <div>
                        <h4 class="text-danger">Payments</h4>
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center flex-column">
                        <form action="controllers/payments/old_payment.controller.php" method="post" class=" text-left d-flex flex-column">
                            <div class=" div-1">
                                <div class=" form-group">
                                    <label for="pro_name">Customer ID</label>
                                    <input type="text" class="form-control w-100" value="<?= $customer ?>" placeholder="Enter Name" name="customerID">
                                </div>
                                <div class="form-group">
                                    <label>Pay Code</label>
                                    <input type="text" class="form-control w-100" value="<?= $Code ?>" placeholder="Enter Name" name="code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Amounts</label>
                                <input type="text" class="form-control w-100" value="<?= $ToTal ?>$" placeholder="Enter Name" name="amounts">
                            </div>
                            <div class="form-group">
                                <div>
                                    <label>Payment Method</label>
                                    <select class="form-control" name="pay_method">
                                        <option selected>Cash</option>
                                        <option>Paypal</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success w-25">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $news = getPayments();
    $ToTal = 0;
    foreach ($news as $new) {
        $ToTal +=  $new['pay_totalprice'];
    }
    ?>
    <h3 class="bg-success border border-primary rounded p-1 pl-4 m-4 text-white">Total : <?php echo $ToTal ?>$</h3>

    <?php require "views/payments/old_payment.view.php"; ?>
</div>