<div class="m-5 d-flex justify-content-center flex-column">

    <form action="controllers/payments/old_payment.controller.php" method="post" class=" text-left d-flex ml-5">

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

        <div class="div-2 ml-5">
        <div class="form-group">
            <div class="">
                    <label>Payment Method</label>
                    <select class="form-control" name="pay_method">
                        <option selected>Cash</option>
                        <option>Paypal</option>
                    </select>
                  </div>
            </div>
            <div class="form-group">
                <label>Amounts</label>
                <input type="text" class="form-control w-100" value="<?= $ToTal ?>$" placeholder="Enter Name" name="amounts">
            </div>
        <button type="submit" class="btn btn-primary w-50">Submit</button> 
          

        </div>

    </form>
</div>
