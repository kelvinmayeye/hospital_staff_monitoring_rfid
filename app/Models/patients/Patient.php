<?php

namespace App\Models\patients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    use HasFactory;

    public function getFullNameAttribute(){
        return $this->first_name .' '.$this->middle_name. ' ' . $this->last_name;
    }

    public function getAgeAttribute(){
        $dob = $this->attributes['dob'];
        $today = date('Y-m-d');
        $diff = date_diff(date_create($dob), date_create($today));
        return $diff->y;
        }

        public function patientCard(){
            return $this->hasMany(PatientCard::class,'patient_id');
        }
}
