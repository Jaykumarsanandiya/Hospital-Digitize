<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addView()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $req)
    {
        $doctor = new Doctor;
        $image = $req->image_url;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->image_url->move('doctorimage', $imagename);
        $doctor->image_url = $imagename;
        $doctor->name = $req->name;
        $doctor->room = $req->room;
        $doctor->phone = $req->phone;
        $doctor->speciality = $req->speciality;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
}
