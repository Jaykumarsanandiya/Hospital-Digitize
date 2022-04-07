<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function redirect(){
        if(Auth::id()){
           
            if(Auth::user()->usertype == 0){
                $doctor = Doctor::all();
                return view('user.home',["doctors" => $doctor]);
            }else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
             redirect('/home');
        }
        $doctor = Doctor::all();

        return view('user.home', [ "doctors" => $doctor]);
    }

    public function appointment(Request $request){
            $appointment = new Appointment ;
            $appointment->name = $request->name;
            $appointment->email = $request->email;
            $appointment->date = $request->date; 
            $appointment->phone = $request->number;
            $appointment->message = $request->message;
            $appointment->status ="In Progess";

            if(Auth::id())
            $appointment->user_id =Auth::user()->id;

            $appointment->doctorname  = $request->doctorname ;

            $appointment->save();
            return redirect()->back()->with('message' , "appointment successful");
     }
}
