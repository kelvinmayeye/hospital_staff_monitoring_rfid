<?php
use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Models\patientscards\PatientCardRecord;

function getTimeDifference($recordId){
    $record = PatientCardRecord::findOrFail($recordId);
    $createdAt = $record->created_at;
    $updatedAt = $record->updated_at;
    $timeDifference = $updatedAt->diff($createdAt);
    return $timeDifference;
}

function getTotalTimeDifference()
{
    $today = Carbon::today();

    $records = PatientCardRecord::whereDate('created_at', $today)->get();

    $totalDifference = CarbonInterval::seconds(0);

    foreach ($records as $record) {
        $createdAt = Carbon::parse($record->created_at);
        $updatedAt = Carbon::parse($record->updated_at);
        $timeDifference = $updatedAt->diff($createdAt);

        $totalDifference = $totalDifference->add($timeDifference);
    }

    // Format the total difference in hours and minutes
    $formattedDifference = $totalDifference->format('%H hr %I mins');

    return $formattedDifference;
}
