<?php

namespace App\Http\Controllers\Admin;

use App\Models\Receivers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceiverController extends Controller
{
   public function index()
   {   
       $receiver = Receivers::all();
       return view('admin.receiver')
            ->with('receiver',  $receiver)
            ;
   }
   public function store(Request $request)
    {   
        
        $receiver = new Receivers;

        $receiver->Name = $request->input('Name');
        $receiver->Age = $request->input('Age');
        $receiver->Address = $request->input('Address');
        $receiver->Mobile = $request->input('Mobile');
        $receiver->Email = $request->input('Email');
        $receiver->BloodGroup = $request->input('BloodGroup');
        $receiver->BloodPressure = $request->input('BloodPressure');
        $receiver->Covidpositive = $request->input('Covidpositive');
        $receiver->RecoveryDate = $request->input('RecoveryDate');
        $receiver->Certified = $request->input('Certified');

        $receiver->save();
        
        return redirect('/receivers')->with('status','Data Added for Receiver Information');
    
    }
}
