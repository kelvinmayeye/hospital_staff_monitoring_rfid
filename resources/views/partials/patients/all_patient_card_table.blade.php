<table class="table hover-table">
    <thead>
        <tr>
            <th>#</th>
            <th>FullName</th>
            <th>Card number</th>
            <th>Status</th>
            <th>Time Used</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patientCards as $key => $patientCard)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $patientCard->patient->full_name }}</td>
                <td>{{ $patientCard->card->card_number }}</td>
                <td>
                    @if ($patientCard->status == 0)
                        Given
                    @else
                        Returned
                    @endif
                </td>
                <td>4 hours </td>
            </tr>
        @endforeach
    </tbody>
</table>
