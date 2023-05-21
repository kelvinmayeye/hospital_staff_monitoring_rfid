<form action="{{ url('add_patient') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <input name="first_name" type="text"
                    class="form-control" placeholder="FirstName">
            </div>
            <div class="form-group">
                <input name="last_name" type="text"
                    class="form-control" placeholder="LastName">
            </div>

            <div class="form-group">
                <input name="middle_name" type="text"
                    class="form-control" placeholder="MiddleName">
            </div>
            <div class="form-group">
                <select name="sex" class="form-control">
                    <option selected="" disabled="">Select Sex
                    </option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="form-group">
                <input name="dob" type="date"
                    class="form-control" placeholder="dob">
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <input name="address" type="text"
                    class="form-control" placeholder="Address">
            </div>
            <div class="form-group res-mg-t-15">
                <input name="phone_number" type="text"
                    class="form-control" placeholder="PhoneNumber">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="payment-adress">
                <button type="submit"
                    class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
    </div>
</form>