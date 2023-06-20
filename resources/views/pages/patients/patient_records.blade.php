@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>All patient card Records</h4>
                <div class="bootstrap-data-table-panel">

                    <div class="table-responsive">
                        <table id="row-select" class="display table table-borderd table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>Card No</th>
                                    <th>Office</th>
                                    <th>Service Time</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allPatientCardRecords as $key => $allPatientCardRecord)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
