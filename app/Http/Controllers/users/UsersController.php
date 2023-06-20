<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\patients\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function getDashboard(){
        $dataPoints = array(
            array("x" => 365, "y" => 70),
            array("x" => 740, "y" => 40),
            array("x" => 1451, "y" => 100)
         );

         $totalPatient = Patient::all();

        return view('pages.dashboard',compact('dataPoints','totalPatient'));
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
