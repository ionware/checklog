<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "surname" => 'required',
            "firstname" => 'required',
            "lastname" => 'required',
            "dob" => 'required',
            "gender" => 'required',
            "telephone_1" => 'required'
        ]);

        if ($validator->fails())
            return response()->json([
                "message" => "Failed to create Record. The form sent is incomplete."
            ], 403);

        $patient = Patients::create($request->except("_token"));
        $patient->fullname = "{$request->firstname} {$request->lastname} {$request->surname}";
        $patient->save();

        return response()->json([
            "message" => "The patient record has been created successfully!"
        ]);
    }

    public function show($id)
    {
        $patient = Patients::findOrFail((int) $id);

        return view('patient.show')->with('patient', $patient);
    }

    public function edit($id)
    {
        $patient = Patients::findOrFail((int) $id);

        return view('patient.edit')->with('patient', $patient);
    }

    public function update($id, Request $request)
    {
        $patient = Patients::findOrFail((int) $id);

        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('public');
            $patient->image_url = $path;
            $patient->save();
        }

        $patient->update($request->except(['_token', 'image_url']));

        session()->flash('patient.updated', "The Patient {$patient->fullname} record has been updated successfully.");
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        if (empty($request->fullname))
            return redirect()->back();

        $patient = Patients::where('fullname', 'LIKE', '%'.$request->fullname.'%')->get();

        return view('patient.search')->with('patients', $patient);
    }
}
