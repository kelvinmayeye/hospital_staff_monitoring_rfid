@extends('layouts.master')
@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-title">
                <h3 align="center">Add Patient</h3>
                <div class="card-body">
                    <form action="{{ url('add_patient') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Firstname</label>
                                    <input name="first_name" type="text" class="form-control" placeholder="FirstName">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Middlename</label>
                                    <input name="middle_name" type="text" class="form-control" placeholder="MiddleName">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Lastname</label>
                                    <input name="last_name" type="text" class="form-control" placeholder="LastName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Sex</label>
                                    <select name="sex" class="form-control">
                                        <option selected="" disabled="">Select Sex
                                        </option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input name="dob" type="date" class="form-control" placeholder="dob">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group res-mg-t-15">
                            <label for="">Phonenumber</label>
                            <input name="phone_number" type="text" class="form-control" placeholder="PhoneNumber">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                    </div>
                    <div class="col text-right">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
