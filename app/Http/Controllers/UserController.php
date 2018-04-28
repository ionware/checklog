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

    /**
     * Shows the dashboard view [Record creation]
     * @return $this
     */
    public function index()
    {
        return view('admin.dashboard')
            ->with('user', auth()->user());
    }

    /**
     * The password update view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function setting()
    {
        return view('admin.settings');
    }

    /**
     * Updates the currently signed in user's password
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Create new Users Account. Admin account.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
