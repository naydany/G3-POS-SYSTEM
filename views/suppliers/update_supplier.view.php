<div  class="container d-flex justify-content-center">
    <div class="card p-5 ml-5 w-50">
        <form action="controllers/suppliers/update_supplier.controller.php" class='d-flex flex-xl-column' method='post'>
        <input type="hidden" name="sup_id" value="<?= $supplier['sup_id'] ?>">
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name ='name' value="<?= $supplier['sup_name'] ?>">
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="number" class="form-control" id="phone" name ='phone' value="<?= $supplier['phone'] ?>">
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name ='address' value="<?= $supplier['sup_address'] ?>">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
