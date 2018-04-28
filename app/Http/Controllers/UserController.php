<?php

namespace App\Http\Controllers;

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
}
