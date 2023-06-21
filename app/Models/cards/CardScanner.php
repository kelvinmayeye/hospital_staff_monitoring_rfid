<?php

namespace App\Models\cards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patientscards\PatientCardRecord;
use App\Models\offices\Office;

class CardScanner extends Model
{
    use HasFactory;

    public function patientCardRecord(){
        return $this->hasMany(PatientCardRecord::class,'scanner_id');
    }

    public function office(){
        return $this->belongsTo(Office::class,'office_id');
    }
}
