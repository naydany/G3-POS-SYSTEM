<div class="container mt-5">
    <div class="card-header border-0 d-flex text-danger">
        <h3>Old Payments</h3>
    </div>
    <div class="container">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Code</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th>customerID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $oldpays = getOldPayments();
                foreach ($oldpays as $oldpay) :
                ?>
                    <tr>
                        <td><?= $oldpay['pay_code'] ?></td>
                        <td><?= $oldpay['pro_name'] ?></td>
                        <td><?= $oldpay['pro_price'] ?>$</td>
                        <td><?= $oldpay['pro_quantity'] ?>$</td>
                        <td><?= $oldpay['pay_totalprice'] ?>$</td>
                        <td><?= $oldpay['pay_date'] ?></td>
                        <td><?= $oldpay['cus_id'] ?></td>
                        <td><?= $oldpay['method_status'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a onclick="return confirm('Do you want to cancel this payment?')" href="controllers/payments/delete_oldpayment.controller.php?id=<?= $oldpay['pay_id'] ?>">
                                    <i class="bi bi-x-circle text-danger btn btn-lg ml-3"></i>
                                </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>