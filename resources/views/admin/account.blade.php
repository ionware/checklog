@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Settings - Update Password | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="settings">
        <h5 class="text-uppercase text-primary">Create new Users account</h5>
        <div class="container-fluid">
            <form action="/settings/account" method="post">
                {{ csrf_field() }}
                <div class="row pad-all-2x">
                    <div class="col-xs-12">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="edl-input input-brd-primary input-rad"
                               name="name" placeholder="Fullname" id="fullname">
                    </div>
                </div>
                <div class="row pad-all-2x">
                    <div class="col-xs-12">
                        <label for="username">Username</label>
                        <input type="text" class="edl-input input-brd-primary input-rad"
                               name="username" placeholder="Username" id="username">
                        <p class="small-2x">Username must be unique and not already existing.</p>
                    </div>
                </div>
                <div class="row pad-all-2x">
                    <div class="col-xs-12">
                        <label for="password">Password</label>
                        <input type="password" class="edl-input input-brd-primary input-rad"
                               name="password" placeholder="Password" id="password">
                    </div>
                </div>
                <div class="row pad-all-2x">
                    <div class="col-xs-12">
                        <label for="password-2">Confirm Password</label>
                        <input type="password" class="edl-input input-brd-primary input-rad"
                               name="password_confirmation" placeholder="Password again" id="password-2">
                    </div>
                </div>
                <div class="row pad-all-2x">
                    <div class="col-xs-6 pull-right">
                        <button class="button btn-rad btn-primary btn-block">Create Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection