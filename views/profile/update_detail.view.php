<div class="container">
    <form method="POST" action="/profile">
        <!-- name -->
        <div class="form-group">
            <label for="exampleFormControlDate1" class="col-sm-3 col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Your Name">
        </div>
        <!-- role -->
        <label for="exampleFormControlDate1" class="col-sm-3 col-form-label">Role</label>
        <select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="Admin">Admin</option>
            <option value="Seller">Seller</option>
            <option value="Stock Manager">Stock Manager</option>
        </select>
        <!-- gender -->
        <label for="exampleFormControlDate1" class="col-sm-3 col-form-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male"
                checked>
            <label class="form-check-label" for="exampleRadios1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
            <label class="form-check-label" for="exampleRadios2">
                Female
            </label>
        </div>
        <!-- BD -->
        <div class="form-group row">
            <label for="exampleFormControlDate1" class="col-sm-3 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="birthdate" id="exampleFormControlDate1"
                    placeholder="dd/mm/yyyy">
            </div>
        </div>
        <!-- country -->
        <div class="form-group">
            <label for="exampleFormControlDate1" class="col-sm-3 col-form-label">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Your Country">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>