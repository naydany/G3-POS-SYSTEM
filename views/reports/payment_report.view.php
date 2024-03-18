
    <div class="container mt-4">
        <h4 class="text-primary" style="margin-top: 5%;">Payment Report</h4>
        <table class="table table-bordered text-center">
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
                $oldpays = getOldPayments();
                foreach ($oldpays as $oldpay) :
                ?>
                    <tr>
                        <td><?= $oldpay['pay_code'] ?></td>
                        <td><?= $oldpay['method_status'] ?></td>
                        <td><?= $oldpay['pro_name'] ?></td>
                        <td><?= $oldpay['pay_totalprice'] ?>$</td>
                        <td><?= $oldpay['pay_date'] ?></td>
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
