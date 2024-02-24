<div class="m-5 d-flex justify-content-center flex-column">
    <form action="../../controllers/items/create.controller.php" method="post" class="d-flex ml-5">

        <div class=" div-1">
            <div class=" form-group">
                <label for="pro_name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Code</label>
                <input type="number" class="form-control" placeholder="Enter Code" name="code">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="image">
            </div>
            <button type="submit" class="btn btn-primary w-25">Submit</button>

        </div>

        <div class="div-2 ml-5">
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter Price" name="price">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" placeholder="Enter Category" name="cate">
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
            </div>

        </div>

    </form>
</div>

</form>
</div>