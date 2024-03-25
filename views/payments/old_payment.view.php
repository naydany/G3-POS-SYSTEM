<div class="container mt-5" style="height: 400px; overflow: auto;">
    <div class="card-header border-0 mt-5 d-flex text-danger">
        <h3>Old Payments</h3>
        <p class="text-muted ml-4">
            <select class="form-control-sm" name="row" id="row">
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>40</option>
                <option>60</option>
                <option>80</option>
                <option>100</option>
            </select>
        </p>
    </div>
    
    <div class="container">
        <table class="table table-bordered text-center mt-1 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Code</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th>CustomerID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="oldPaymentsTableBody">
                <?php
                $oldpays = getOldPayments();
                foreach ($oldpays as $oldpay) :
                ?>
                    <tr>
                        <td><?= $oldpay['pay_code'] ?></td>
                        <td><?= $oldpay['pro_name'] ?></td>
                        <td><?= $oldpay['pro_price'] ?>$</td>
                        <td><?= $oldpay['pro_quantity'] ?></td>
                        <td><?= $oldpay['pay_totalprice'] ?>$</td>
                        <td><?= $oldpay['pay_date'] ?></td>
                        <td><?= $oldpay['cus_id'] ?></td>
                        <td><?= $oldpay['method_status'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a onclick="return confirm('Do you want to cancel this payment?')" href="controllers/payments/delete_oldpayment.controller.php?id=<?= $oldpay['pay_id'] ?>">
                                    <i class="bi bi-x-circle text-danger btn btn-lg ml-3"></i>
                                </a>
                            </div>
                        </td>
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
                var tableRows = document.querySelectorAll('#oldPaymentsTableBody tr');
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
