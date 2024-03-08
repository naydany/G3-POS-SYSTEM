<div  class="container d-flex justify-content-center">
    <div class="card p-5 ml-5 w-50">
        <form action="controllers/suppliers/add_supplier.controller.php" class='d-flex flex-xl-column' method='post'>

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name ='name'>
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="number" class="form-control" id="phone" name ='phone'>
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name ='address'>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- can delete this -->