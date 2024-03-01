<div class="m-5 d-flex justify-content-center flex-column">

    <form action="../../controllers/items/create.controller.php" method="post" class=" text-center d-flex ml-5" enctype="multipart/form-data">

        <div class=" div-1">
            <div class=" form-group">
                <label for="pro_name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Code</label>
                <input type="text" class="form-control" placeholder="Enter Code" name="code">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="image">
            </div>
            <div class="form-group">
                <label>supplier</label>
                <!-- <input type="text" class="form-control" placeholder="Enter Category" name="cate"> -->
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="supplier">
                        <option selected>Choose supplier...</option>
                        <?php for($i = 0; $i<count($suppliers);$i++) : ?>
                              <option value="<?= $suppliers[$i][0] ?>"><?= $suppliers[$i][0] ?></option>  
                        <?php endfor; ?>
                    </select>
                </div>
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
                <!-- <input type="text" class="form-control" placeholder="Enter Category" name="cate"> -->
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="category">
                        <option selected>Choose category...</option>
                        <?php for ($i = 0; $i < count($categories); $i++) : ?>
                            <option value="<?= $categories[$i][0] ?>"><?= $categories[$i][0] ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
            </div>

        </div>

    </form>
</div>
