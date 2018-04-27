@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Administrator Board | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="main-frame" id="render">
        <!-- Inject app into container -->
    </div>
    <script src="/js/app.js"></script>
@endsection