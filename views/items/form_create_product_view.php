<div class="m-5 d-flex justify-content-center flex-column">
    <form action="../../controllers/items/create.controller.php" method="post" ">
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
<button type="submit" class="btn btn-primary w-25 mx-auto m-4">Submit</button>
</form>
</div>