@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Search Records | {{ env("APP_NAME") }}</title>
    <style>
        thead {
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    @if (count($patients) > 0)
                        <table class="table table-striped table-responsive table-hover">
                            <thead>
                            <tr>
                                <td></td>
                                <td>Fullname</td>
                                <td>Telephone</td>
                                <td>Gender</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>
                                        @if($patient->image_url)
                                            <img src="/images/{{$patient->image_url}}" alt="Patient" class="patient-avater-small">
                                        @else
                                            <img src="/images/patient.png" alt="Patient" class="patient-avater-small">
                                        @endif
                                    </td>
                                    <td>{{ $patient->fullname }}</td>
                                    <td>{{ $patient->telephone_1 }}</td>
                                    <td>{{ $patient->gender }}</td>
                                    <td class="small-1x">
                                        <a href="/patient/{{ $patient->id }}" class="tb-link"><i class="fa fa-eye"></i>View</a>
                                        <a href="/patient/{{ $patient->id }}/edit" class="tb-link"><i class="fa fa-edit"></i>Edit</a>
                                        <a href="/patient/{{ $patient->id }}/checkin" class="tb-link"><i class="fa fa-check-square-o"></i>Checkins</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3>Sorry, there is no record that match your search.</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
@endsection