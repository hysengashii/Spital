<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// uuse App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = Doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $doctor = Doctor::all();
        return view('user.home',compact('doctor'));
    }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment;

        // $data->phone kjo eshte ne databaze;   $request->number; kjo eshte ne form
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';

        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appoinment Request Successfull . We will contact with you soon');

    }


    public function myappointment()
    {
        if(Auth::id())
        {

            // eshte be ketu nese hyn login mi shfaqe vetem mesazhet e keti useri id qe eshte regjistru mesazhin jo te gjitha mesazhet e userave

            $userid=Auth::user()->id;
            $appoint=Appointment::where('user_id',$userid)->get();


        return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=Appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}
