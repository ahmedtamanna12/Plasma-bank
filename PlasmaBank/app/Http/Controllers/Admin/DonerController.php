<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonerController extends Controller
{
    public function index()
    {
        $doner = Doners::all();
        return view('admin.doner')
        ->with('doner',$doner)
        ;
            
    }
    public function store(Request $request)
    {
        $doner = new Doners;

        $doner->Name = $request->input('Name');
        $doner->Age = $request->input('Age');
        $doner->Address = $request->input('Address');
        $doner->Mobile = $request->input('Mobile');
        $doner->Email = $request->input('Email');
        $doner->BloodGroup = $request->input('BloodGroup');
        $doner->BloodPressure = $request->input('BloodPressure');
        $doner->Covidpositive = $request->input('Covidpositive');
        $doner->RecoveryDate = $request->input('RecoveryDate');
        $doner->Certified = $request->input('Certified');

        $doner->save();
        
        return redirect('/doners')->with('status','Data Added for Doner Information');
    
    }
    public function edit($id)
    {
        $doner =  Doners::findOrFail($id);
        return view('admin.doners.edit')
            ->with('doner',$doner)
        ;
    }
    public function update(Request $request,$id)
    {
        $doner =  Doners::findOrFail($id);

        $doner->Name = $request->input('Name');
        $doner->Age = $request->input('Age');
        $doner->Address = $request->input('Address');
        $doner->Mobile = $request->input('Mobile');
        $doner->Email = $request->input('Email');
        $doner->BloodGroup = $request->input('BloodGroup');
        $doner->BloodPressure = $request->input('BloodPressure');
        $doner->Covidpositive = $request->input('Covidpositive');
        $doner->RecoveryDate = $request->input('RecoveryDate');
        $doner->Certified = $request->input('Certified');

        $doner->update();
        
        return redirect('/doners')->with('status','Data Updated for Doner Information');
    }
}
