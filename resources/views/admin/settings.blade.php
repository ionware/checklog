@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Settings - Update Password | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @if (count($errors) > 0)
        <div class="alert alert-dismissible edl-alert edl-alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <p>Failed to update password. Check if the password entered matches.</p>
        </div>
    @endif
    @include('layouts.navbar')
    <div class="settings">
        <h5 class="text-uppercase text-primary">Update your password</h5>
        <div class="container-fluid">
            <form action="/settings" method="post">
                {{ csrf_field() }}
                <div class="row pad-all-2x">
                    <div class="col-xs-12">
                        <label for="password">New Password</label>
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
                    <div class="col-xs-3 pull-right">
                        <button class="button btn-rad btn-primary btn-block">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection