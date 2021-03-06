<?php

namespace App\Http\Controllers;

use App\Checkin;
use App\Patients;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Show list of checkin the record id has.
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $patient = Patients::findOrFail((int) $id);
        $checkins = $patient->checkins()->orderBy('id', 'desc')->get();

        return view('patient.checkin')
            ->with('checkins', $checkins)
            ->with('patient', $patient);
    }

    /**
     * Create new Checkin for the record's id
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $patient = Patients::findOrFail((int) $id);
        $checkin = new Checkin($request->except(['_token']));
        $checkin->record_id = $patient->id;
        $checkin->save();

        session()->flash('patient.updated', 'CheckIn has been created successfully for '.$patient->fullname);
        return redirect()->back();
    }
}
