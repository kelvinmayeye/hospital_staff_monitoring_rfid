<?php

namespace App\Models\patientscards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patients\Patient;
use App\Models\cards\Card;

class PatientCard extends Model
{
    use HasFactory;

    protected $table = 'patient_card';

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
    
    public function card(){
        return $this->belongsTo(Card::class,'card_id');
    }
}