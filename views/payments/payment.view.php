<div class="container">
    <div class="card-header border-0">
        <a href="/orders" class="btn btn-outline-primary">
            <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
            Make A New Order
        </a>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Code</th>
                    <th>Product</th>
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
                        <td><?= $payment['pay_totalprice'] ?>$</td>
                        <td><?= $payment['pay_date'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="#">
                                    <button class="btn btn-sm btn-success mr-3">
                                        <i class="fas fa-handshake"></i>
                                        Pay Order
                                    </button>
                                </a>

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
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>