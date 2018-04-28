@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Editing Patient {{ $patient->fullname }} | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="container" style="margin-top: 25px;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <form action="/patient/{{$patient->id}}/edit" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row divider">
                        @if($patient->image_url)
                            <img src="/images/{{ $patient->image_url }}" alt="Patient" class="patient-avater">
                        @else
                            <img src="/images/patient.png" alt="Patient" class="patient-avater">
                        @endif
                            <input type="file" name="image_url" placeholder="Select Profile Picture">
                    </div>
                    <!--Names -->
                    <div class="row pad-all-4x">
                        <div class="col-xs-4">
                            <label>Surname</label>
                            <input type="text" placeholder="Surname" name="surname"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->surname }}">
                        </div>
                        <div class="col-xs-4">
                            <label>Firstname</label>
                            <input type="text" placeholder="Firstname" name="firstname"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->firstname }}">
                        </div>
                        <div class="col-xs-4">
                            <label>Lastname</label>
                            <input type="text" placeholder="Lastname" name="lastname"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->lastname }}">
                        </div>
                    </div>
                    <!-- Date of Birth, Profession, Telephones -->
                    <div class="row pad-all-4x">
                        <div class="col-xs-3">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Date of Birth" name="dob"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->dob }}">
                        </div>
                        <div class="col-xs-3">
                            <label>Telephone 1</label>
                            <input type="text" placeholder="Telephone 1" name="telephone_1"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->telephone_1 }}">
                        </div>
                        <div class="col-xs-3">
                            <label>Telephone 2</label>
                            <input type="text" placeholder="Telephone 2" name="Telephone 2" class="edl-input input-brd-primary input-rad" value="{{ $patient->telephone_2 }}">
                        </div>
                        <div class="col-xs-3">
                            <label>Profession</label>
                            <input type="text" placeholder="Profession" name="profession"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->profession }}">
                        </div>
                    </div>
                    <div class="row pad-all-4x">
                        <div class="col-xs-3">
                            <label>State of Birth</label>
                            <input type="text" placeholder="State of Birth" name="state_birth"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->state_birth }}">
                        </div>
                        <div class="col-xs-3">
                            <label>State of Origin</label>
                            <input type="text" placeholder="State of Origin" name="state_origin"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->state_origin }}">
                        </div>
                        <div class="col-xs-6">
                            <label>Mother's Maiden Name</label>
                            <input type="text" placeholder="Maiden Name" name="maiden_name" class="edl-input input-brd-primary input-rad" value="{{ $patient->maiden_name }}">
                        </div>
                    </div>
                    <div class="row pad-all-4x">
                        <div class="col-xs-4">
                            <label>Next of Kin's Name</label>
                            <input type="text" placeholder="Next of Kin" name="kin_name"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->kin_name }}">
                        </div>
                        <div class="col-xs-4">
                            <label>Kin's Relationship</label>
                            <input type="text" placeholder="Kin's Relationship" name="kin_relationship"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->kin_relationship }}">
                        </div>
                        <div class="col-xs-4">
                            <label>Kin's Telephone</label>
                            <input type="text" placeholder="Kin's Number" name="kin_telephone"
                                   class="edl-input input-brd-primary input-rad" value="{{ $patient->kin_telephone }}">
                        </div>
                    </div>
                    <div class="row pad-all-4x">
                        <div class="col-xs-4">
                            <button type="submit" class="button btn-primary btn-block btn-rad">Update Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection