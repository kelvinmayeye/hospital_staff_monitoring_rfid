@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>All Patients</h4>
                <div class="bootstrap-data-table-panel">

                    <div class="table-responsive">
                        <table id="row-select" class="display table table-borderd table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($patients as $key => $patient)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $patient->full_name }}</td>
                                        <td>{{ $patient->sex }}</td>
                                        <td>{{ $patient->dob }}</td>
                                        <td>{{ $patient->address }}</td>
                                        <td>{{ $patient->phone_number }}</td>
                                        <td><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addPatientCardModal{{ $patient->id }}">card</a></td>
                                    </tr>
                                    @include('pages.modals.add_patient_card')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
