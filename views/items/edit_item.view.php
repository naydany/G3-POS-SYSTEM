
<div class="m-5 d-flex justify-content-center flex-column">
    <form action="controllers/items/update_item.controller.php" method="post" class="d-flex ml-5">
        <input type="hidden" name="id" value="<?= $pro['pro_id'] ?>">

        <div class=" div-1 w-200">
            <div class=" form-group ">
                <label for="pro_name">Name</label>
                <input type="text" class="form-control w-100" value="<?= $pro['pro_name'] ?>" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Code</label>
                <input type="text" class="form-control" value="<?= $pro['pro_code'] ?>" placeholder="Enter Code" name="code">
            </div>

        </div>

        <div class="div-2 ml-5">

            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" value="<?= $pro['pro_price'] ?>" placeholder="Enter Price" name="price">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" value="<?= $pro['pro_quantity'] ?>" placeholder="Enter Quantity" name="quantity">
            </div>
            <button type="submit" class="btn btn-primary w-50 m-4">Update</button>
        </div>

    </form>
</div>