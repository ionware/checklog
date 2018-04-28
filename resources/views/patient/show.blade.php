@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>{{ $patient->fullname }} | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="container" style="margin-top: 25px;">

        <div class="row text-center">
            @if($patient->imgage_url)
                <img src="{{ $patient->image_url }}" alt="Patient" class="patient-avater">
            @else
                <img src="/images/patient.png" alt="Patient" class="patient-avater">
            @endif
        </div>
        <div class="row pad-all-2x">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="row pad-all-2x divider">
                    <div class="col-xs-4 data">
                        <label>Surname</label>
                        <span>{{ $patient->surname }}</span>
                    </div>
                    <div class="col-xs-4 data">
                        <label>Firstname</label>
                        <span>{{ $patient->firstname }}</span>
                    </div>
                    <div class="col-xs-4 data">
                        <label>Lastname</label>
                        <span>{{ $patient->lastname }}</span>
                    </div>
                </div>
                <!--Marita, gender, date of birth-->
                <div class="row divider pad-all-2x">
                    <div class="col-xs-4 data">
                        <label>Date of Birth</label>
                        <span>{{ $patient->dob }}</span>
                    </div>
                    <div class="col-xs-4 data">
                        <label>Gender</label>
                        <span>{{ $patient->gender }}</span>
                    </div>
                    <div class="col-xs-4 data">
                        <label>Marital Status</label>
                        <span>{{ $patient->marital_status }}</span>
                    </div>
                </div>
                <!-- Address -->
                <div class="row pad-all-2x divider">
                    <div class="col-xs-6 data">
                        <label>Home Address</label>
                        @if ($patient->home_address)
                            <span> {{ $patient->home_address }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-6 data">
                        <label>Contact Address</label>
                        @if ($patient->contact_address)
                            <span> {{ $patient->contact_address }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                </div>
                <!-- Telephone and Profession -->
                <div class="row pad-all-2x divider">
                    <div class="col-xs-4 data">
                        <label>Telephone 1</label>
                        <span>{{ $patient->telephone_1 }}</span>
                    </div>
                    <div class="col-xs-4 data">
                        <label>Telephone 2</label>
                        @if ($patient->telephone_2)
                            <span> {{ $patient->telephone_2 }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-4 data">
                        <label>Profession</label>
                        @if ($patient->profession)
                            <span> {{ $patient->profession }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                </div>
                <!--State of Origin and Mother maiden -->
                <div class="row pad-all-2x divider">
                    <div class="col-xs-4 data">
                        <label>State of Origin</label>
                        @if ($patient->state_origin)
                            <span> {{ $patient->state_origin }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-4 data">
                        <label>State of Birth</label>
                        @if ($patient->state_birth)
                            <span> {{ $patient->state_birth }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-4 data">
                        <label>Mother Maiden</label>
                        @if ($patient->maiden_name)
                            <span> {{ $patient->maiden_name }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                </div>
                <!-- Kin -->
                <div class="row pad-all-2x divider">
                    <div class="col-xs-4 data">
                        <label>Next of Kin</label>
                        @if ($patient->kin_name)
                            <span> {{ $patient->kin_name }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-4 data">
                        <label>Kin's Relationship</label>
                        @if ($patient->kin_relationship)
                            <span> {{ $patient->kin_relationship }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                    <div class="col-xs-4 data">
                        <label>Kin's Telephone</label>
                        @if ($patient->kin_telephone)
                            <span> {{ $patient->kin_telephone }}</span>
                        @else
                            <span>----------------</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection