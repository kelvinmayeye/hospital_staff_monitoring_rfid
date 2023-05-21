<?php

namespace App\Models\cards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patientscards\PatientCard;

class Card extends Model
{
    use HasFactory;

    public function patientCard(){
        return $this->hasMany(PatientCard::class);
    }
}