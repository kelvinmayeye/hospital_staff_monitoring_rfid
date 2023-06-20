@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Today Patient Cards</h4>
                <div class="bootstrap-data-table-panel">

                    <div class="table-responsive">
                        <table id="row-select" class="display table table-borderd table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Phone Number</th>
                                    <th>Card No</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($todayPatientsCards as $key => $todayPatientsCard)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $todayPatientsCard->patient->full_name }}</td>
                                        <td>{{ $todayPatientsCard->patient->sex }}</td>
                                        <td>{{ $todayPatientsCard->patient->age }}</td>
                                        <td>{{ $todayPatientsCard->patient->phone_number }}</td>
                                        <td>{{ $todayPatientsCard->card->card_number }}</td>
                                        <td>
                                            @if ($todayPatientsCard->status == 1)
                                                <span class="badge badge-success">Returned</span>
                                            @else
                                                <span class="badge badge-secondary">Not Returned</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
