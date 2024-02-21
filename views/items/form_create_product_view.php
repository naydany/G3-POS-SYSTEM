<div class="m-5 d-flex justify-content-center flex-column">
    <form action="../../controllers/items/create.controller.php" method="post" ">
        <div class=" form-group">
        <label for="pro_name">Pro Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="pro_name">
</div>
<div class="form-group">
    <label>Pro Code:</label>
    <input type="number" class="form-control" placeholder="Enter Code" name="pro_code">
</div>
<div class="form-group">
    <label>Pro Image:</label>
    <input type="file" class="form-control" placeholder="Insert Image" name="pro_image">
</div>

<div class="form-group">
    <label>Pro Description:</label>
    <input type="text" class="form-control" placeholder="Enter Description" name="pro_desc">
</div>
<div class="form-group">
    <label>Pro Price:</label>
    <input type="text" class="form-control" placeholder="Enter Price" name="pro_price">
</div>
<div class="form-group">
    <label>Pro Date:</label>
    <input type="date" class="form-control" placeholder="Set Date" name="pro_date">
</div>

<button type="submit" class="btn btn-primary w-25 mx-auto m-4">Submit</button>
</form>


</div>