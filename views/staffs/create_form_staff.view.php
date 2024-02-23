<div  class="container d-flex justify-content-center">
    <div class="card p-5 ml-5 w-50">
        <form action="controllers/staffs/add_staff.controller.php" class='d-flex flex-xl-column' method='post'>

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name ='name'>
            </div>

            <div class="form-group">
                <label for="number">number:</label>
                <input type="text" class="form-control" id="number" name ='number'>
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name ='email'>
            </div>
            
            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" class="form-control" id="password" name ='password'>
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name ='address'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
