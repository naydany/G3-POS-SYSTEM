<?php
$tablepayorder = getPayments();
?>
<div class="container">
    <h3 class="bg-success text-dark p-3">Print Order</h3>
    <div class="card-body">
        <div id="myrecipt">
            <div class="text-dark" style="display:flex; justify-content: space-between; padding:20px;">

                <div>
                    <h3>Customer Details</h3>
                    <span>customer ID :</span><br>
                    <span>customer Phone :</span><br>
                    <span>customer Email :</span>
                </div>

                <div>
                    <h3>Invoice Details</h3>
                    <span>Invoice No :</span><br>
                    <span>Invoice Date : </span><br>
                    <span>Address :</span>
                </div>
            </div>

            <table class="text-center mt-3 table table-bordered text-center mt-2 rounded" style="width: 100%; margin-right: 30px; ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tablepayorder as $getpayments) :

                    ?>
                        <tr style="text-align: center;">
                            <td><?php echo $getpayments['pay_id']; ?></td>
                            <td><?php echo $getpayments['pro_name']; ?></td>
                            <td><?php echo $getpayments['pro_price']; ?>$</td>
                            <td><?php echo $getpayments['pro_quantity']; ?></td>
                            <td><?php echo $getpayments['pay_totalprice']; ?>$</td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>

            </table>

            <hr>

            <?php
            $ToTal = 0;
            foreach ($tablepayorder as $getpayments) {
                $ToTal +=  $getpayments['pay_totalprice'];
            }
            ?>
            <div style="display: flex; justify-content:space-between; padding: 20px;">
                <p>Payment Mode ... payment</p>
                <h5 class="text-danger">Total Price = <?php echo $ToTal; ?>$</h5>
            </div>
        </div>
    </div>
    <div class="mr-5 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/complete_pay" class="border border-primary p-2 rounded mr-2">Save</a>
        <!-- <button class="btn bg-secondary text-light">Save</button> -->
        <button class="btn bg-info text-light flex-shrink-1" onclick="startPrintOrder()">Print</button>
    </div>
</div>