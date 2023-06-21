<?php

namespace App\Models\offices;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cards\CardScanner;

class Office extends Model
{
    use HasFactory;

    public function cardScanner(){
        return $this->hasOne(CardScanner::class);
    }
}
