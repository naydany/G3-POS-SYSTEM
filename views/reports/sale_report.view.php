<div class="container mt-3">
    <h4 class="text-primary" style="margin-top: 5%;">Orders Reports</h4>
    <table class="table table-bordered text-center">
        <thead class="text-secondary thead-light">

            <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Total Price</th>
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
                    <td><?= $order['tatal_price'] ?></td>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>