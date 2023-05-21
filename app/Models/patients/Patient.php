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
}