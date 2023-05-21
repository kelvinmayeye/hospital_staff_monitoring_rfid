<?php

namespace App\Http\Controllers\patientscard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\patients\Patient;

class PatientCardController extends Controller
{
    public function getAddPatients(){
        $patients = Patient::All();
        return view('pages.patients.add_patients',compact('patients'));
    }

    public function store(Request $request){
        $patient = new Patient();
         $patient->first_name = $request->first_name;
         $patient->middle_name = $request->middle_name;
         $patient->last_name = $request->last_name;
         $patient->sex = $request->sex;
         $patient->dob = $request->dob;
         $patient->address = $request->address;
         $patient->phone_number = $request->phone_number;
         $patient->save();
         Session::flash('success','Patient added');
         return back();
    }
}