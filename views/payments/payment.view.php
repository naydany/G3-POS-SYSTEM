<div class="container">
    <div class="card-header py-3 d-flex justify-content-between ">
        <div class="card-header border-0">
            <a href="/orders" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
                Make A New Order
            </a>
        </div>
        <div class="d-flex">
            <div class="card-header border-0">
                <a href="/old_payment" class="btn btn-outline-primary">
                    <i class="fas fa-plus"></i> <i class="bi bi-currency-dollar"></i>
                    Start to Pay
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Code</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $payments = getPayments();
                foreach ($payments as $payment) :
                ?>
                    <tr>
                        <td><?= $payment['pay_code'] ?></td>
                        <td><?= $payment['pro_name'] ?></td>
                        <td><?= $payment['pro_price'] ?>$</td>
                        <td><?= $payment['pro_quantity'] ?></td>
                        <td><?= $payment['pay_totalprice'] ?>$</td>
                        <td><?= $payment['pay_date'] ?></td>
                        <td>
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
    <?php
    $news = getPayments();
    $ToTal = 0;
    foreach ($news as $new) {
        $ToTal +=  $new['pay_totalprice'];
    }
    ?>
    <h3 class="bg-success border border-primary rounded p-1 pl-4 m-4 text-white">Total : <?php echo $ToTal ?>$</h3>
    <div class="d-flex justify-content-end">
        <div class="align-self-end ">
            <a href="/old_payment" class="btn btn-outline-primary mr-4">
                <i class="fas fa-plus"></i> <i class="bi bi-currency-dollar"></i>
                Start to Pay
            </a>
        </div>
    </div>
</div>
<?php require "views/payments/old_payment.view.php"; ?>
</div>
