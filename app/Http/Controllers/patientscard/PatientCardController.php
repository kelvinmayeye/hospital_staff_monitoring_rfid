<?php

namespace App\Http\Controllers\patientscard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\patients\Patient;
use App\Models\cards\Card;
use App\Models\patientscards\PatientCard;
use Carbon\Carbon;

class PatientCardController extends Controller
{
    public function allPatients(){
    $patients = Patient::all();

    $cards = Card::leftJoin('patient_card', function ($join) {
        $join->on('cards.id', '=', 'patient_card.card_id')
             ->where('patient_card.status', '=', 1);
    })
    ->whereNull('patient_card.card_id')
    ->orWhere('patient_card.status', '=', 1)
    ->select('cards.*')
    ->get();



    return view('pages.patients.all_patients', compact('patients', 'cards'));
    }


    public function getAddPatient(){
        return view('pages.patients.add_patient');
    }

    public function getTodayPatientCards(){
        $today = Carbon::now()->format('Y-m-d');
        $todayPatientsCards = PatientCard::whereDate('created_at', '=', $today)->get();
        return view('pages.patients.patients_card',compact('todayPatientsCards'));
    }

    public function storePatient(Request $request){
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

    public function storePatientCard(Request $request){
        $patientCard = new PatientCard();
        $patientCard->patient_id = $request->patient_id;
        $patientCard->card_id = $request->card_id;
        $patientCard->save();
        Session::flash('success','Patient Card added Successfully');
        return back();
    }
}
