<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('admin.dashboard')
            ->with('user', auth()->user());
    }

    public function setting()
    {
        return view('admin.settings');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);

        auth()->user()->password = bcrypt($request->password);
        auth()->user()->save();
        session()->flash('patient.updated', 'Your password has been successfully updated. Log out now to make effect.');
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User($request->only(['name', 'username']));
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('patient.updated', 'Account has been created successffuly. Thank you.');
        return redirect()->route('home');
    }
}
