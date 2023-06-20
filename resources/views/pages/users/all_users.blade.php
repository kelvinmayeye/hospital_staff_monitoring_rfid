@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 mx-auto">
            <div class="sparkline12-list mg-b-30">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>All Users</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="static-table-list">
                        <table class="table hover-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cards as $key=>$card)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $card->card_number }}</td>
                                        <td>{{ $card->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection