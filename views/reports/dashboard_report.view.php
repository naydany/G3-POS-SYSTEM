<div class="container mt-4">
    <h4 class="text-primary" style="margin-top: 5%;">Top sales product</h4>
    <table class="table table-bordered text-center mt-2 rounded">
        <thead class="text-secondary thead-light">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Total Sales</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $topRoders = getOldPayments();
            $product_sales = array();
            foreach ($topRoders as $topRoder):
                $product_name = $topRoder['pro_name'];
                $product_price = $topRoder['pay_totalprice'];

                if (!isset($product_sales[$product_name])) {
                    $product_sales[$product_name] = 0;
                }

                $product_sales[$product_name]++;
            endforeach;
            arsort($product_sales);

            foreach ($product_sales as $product_name => $total_sales):
                $payment_entry = array_values(array_filter($topRoders, function($entry) use ($product_name) {
                    return $entry['pro_name'] === $product_name;
                }))[0];
                ?>
                <tr>
                    <td><?= $payment_entry['pay_code'] ?></td>
                    <td><?= $product_name ?></td>
                    <td><?= $total_sales ?></td>
                    <td><?= $payment_entry['pay_totalprice'] ?>$</td>
                    <td><?= $payment_entry['pay_date'] ?></td> 
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>


        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <h4 class="text-primary"  style="margin-top: 5%;">Products sold</h4>
                <tr>
                    <th>Code</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $oldpays = getOldPayments();
                foreach ($oldpays as $oldpay):
                ?>
                    <tr>
                        <td><?= $oldpay['pay_code'] ?></td>
                        <td><?= $oldpay['pro_name'] ?></td>
                        <td><?= $oldpay['pay_totalprice'] ?>$</td>
                        <td><?= $oldpay['pay_date'] ?></td> 
                        <td><?= $oldpay['method_status'] ?></td>
                    </tr>
                <?php endforeach; ?>  

                <?php
                $getpays = getPayments();
                foreach ($getpays as $getpay): 
                ?> 
                    <tr>
                        <td><?= $getpay['pay_code'] ?></td>
                        <td><?= $getpay['pro_name'] ?></td>
                        <td><?= $getpay['pay_totalprice'] ?>$</td>
                        <td><?= $getpay['pay_date'] ?></td> 
                        <td><?= $getpay['method_status'] ?></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </table>
</div>