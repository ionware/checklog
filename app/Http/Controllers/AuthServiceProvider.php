<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthServiceProvider extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('destroy');
        $this->middleware('guest')->except('destroy');
    }

    public function show()
    {
        return view('login');
    }

    public function create(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        sleep(4);

        if (! auth()->attempt($credentials))
            return response()->json([
                "data" => [
                    "message" => "Authentication failed. Username or password is incorrect."
                ]
            ], 400);

        return response()->json([
            "data" => [
                "message" => "Authentication successful. You will be redirect to homepage shortly.",
                "status" => "success"
            ]
        ], 200);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
