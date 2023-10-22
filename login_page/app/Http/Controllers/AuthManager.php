<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Response;

class AuthManager extends Controller
{
    function login() {
        return view(view: 'login');
    }

    function registration() {
        return view(view: 'registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'

    ]);

    $credentials = $request->only ( 'email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended (route ( name: 'home'));
    }
    return redirect (route ( name: 'login'))->with("error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'fathername' => 'required',
            'addressofincident' => 'required',
            'aadhar' => 'required',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required',
            'nationality' => 'required',
            'incidentinformation' => 'required',
            'phoneNo' => 'required',
            'altPhoneNo' => 'required',


            ]);

            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->fathername = $request->fathername;
            $data->addressofincident = $request->addressofincident;
            $data->aadhar = $request->aadhar;
            $data->district = $request->district;
            $data->city = $request->city;
            $data->state = $request->state;
            $data->nationality = $request->nationality;
            $data->incidentinformation = $request->incidentinformation;
            $data->phoneNo = $request->phoneNo;
            $data->altPhoneNo = $request->altPhoneNo;
            $user = $data->save();
            if($user){
                return Response::json(["User data saved successfully"],200);


            }
            return Response::json(["User data not saved"],501);
        }

        function logout(){
            \Session::flush();
            Auth::logout();
            return redirect (route ( name: 'login'));


        }

    

    
    


}