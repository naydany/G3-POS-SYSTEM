<div  class="container d-flex justify-content-center">
    <div class="card p-5 ml-5 w-50">
        <form action="controllers/staffs/update_staff.controller.php" class='d-flex flex-xl-column' method='post'>
        <input type="hidden" name="cas_id" value="<?= $staff['cas_id'] ?>">

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name ='name' value="<?= $staff['cas_name'] ?>">
            </div>

            <div class="form-group">
                <label for="number">number:</label>
                <input type="number" class="form-control" id="number" name ='number' value="<?= $staff['cas_number'] ?>">
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name ='email' value="<?= $staff['cas_email'] ?>">
            </div>
            
            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" class="form-control" id="password" name ='password' value="<?= $staff['cas_password'] ?>">
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name ='address' value="<?= $staff['staff_addres'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
