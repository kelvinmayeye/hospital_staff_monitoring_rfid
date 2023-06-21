<?php

namespace App\Models\patientscards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cards\CardScanner;
use App\Models\patientscards\PatientCard;


class PatientCardRecord extends Model{
    use HasFactory;

    protected $table="patient_card_record";

    public function scanner(){
        return $this->belongsTo(CardScanner::class,'scanner_id');
    }

    public function patientCard(){
        return $this->belongsTo(PatientCard::class,'patient_card_id');
    }


}
