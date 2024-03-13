
    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <h4 class="m-5 text-primary">Payment Report</h4>
            <thead class="text-secondary thead-light">

                <tr>
                    <th>Payment Code</th>
                    <th>Payment Method</th>
                    <th>Product Name</th>
                    <th>Amount Paid</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "controllers/payments/old_payment.controller.php";
                $oldpays = getOldPayments();
                foreach ($oldpays as $oldpay) :
                ?>
                    <tr>
                        <td><?= $oldpay['pay_code'] ?></td>
                        <td><?= $oldpay['method_status'] ?></td>
                        <td><?= $oldpay['pro_name'] ?>$</td>
                        <td><?= $oldpay['pay_totalprice'] ?>$</td>
                        <td><?= $oldpay['pay_date'] ?></td>
                        <!-- <td>
                            <div class="btn-group">
                                <a onclick="return confirm('Do you want to cancel this payment?')" href="controllers/payments/delete_oldpayment.controller.php?id=<?= $oldpay['pay_id'] ?>">
                                    <i class="bi bi-x-circle text-danger btn btn-lg ml-3"></i>
                                </a>
                        </td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
