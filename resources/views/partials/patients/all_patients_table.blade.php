<table class="table hover-table">
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
                <td><a href="#" class="btn btn-primary btn-sm">card</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
