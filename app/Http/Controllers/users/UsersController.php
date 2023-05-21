<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getDashboard(){
        $dataPoints = array(
            array("x" => 365, "y" => 70),
            array("x" => 740, "y" => 40),
            array("x" => 1451, "y" => 100)
         );
        
        return view('pages.dashboard',compact('dataPoints'));
    }
}