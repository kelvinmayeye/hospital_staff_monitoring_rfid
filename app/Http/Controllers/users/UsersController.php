<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\patients\Patient;
use App\Models\cards\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\patientscards\PatientCard;

class UsersController extends Controller
{
    public function getDashboard(){
        $dataPoints = array(
            array("x" => 365, "y" => 70),
            array("x" => 740, "y" => 40),
            array("x" => 1451, "y" => 100)
         );

         $totalPatient = Patient::all();
         $today = Carbon::now()->format('Y-m-d');
        $todayPatientsCards = PatientCard::whereDate('created_at', '=', $today)->get();
        $availableCards = Card::where('status',0)->get();

        $totalDifference = getTotalTimeDifference();

        return view('pages.dashboard',compact('dataPoints','totalPatient','todayPatientsCards','availableCards','totalDifference'));
    }

    public function login(Request $request){
            $credentials = [
                "email"=>$request->email,
                "password"=>$request->password
            ];

        if(Auth::attempt($credentials)){
            if(Auth::user()->role==0){
                return redirect('dashboard');
            }
        }
        Session::flash("error","username or password is invalid");
        return back();
    }

    public function getAllUser(){
        $users = User::all();
        return view('pages.users.all_users',compact('users'));
    }
}
