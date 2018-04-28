@extends('layouts.master')

@section('header')
    <title>Administrator Board | {{ env("APP_NAME") }}</title>
@endsection

@section('body')
    @include('layouts.navbar')
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row pad-all-4x">
                    <div class="col-xs-2 pull-right">
                        <button class="btn btn-primary button btn-rad" data-toggle="modal" data-target="#new-checkin">
                            <i class="fa fa-plus" style="font-size: 1.2em; margin-right: 4px;"></i> New CheckIn
                        </button>
                    </div>
                </div>
                @if(count($checkins) > 0)
                    @foreach($checkins as $checkin)
                        <div class="checkin">
                            @if ($patient->image_url)
                                <img src="/images/{{$patient->image_url}}" alt="Patient">
                            @else
                                <img src="/images/patient.png" alt="Patient">
                            @endif
                            <h4>{{ $checkin->title }}</h4>
                            <p>
                                {{ $checkin->description }}
                            </p>
                            <span class="date">12:54 24th April, 2018</span>
                        </div>
                    @endforeach
                @else
                    <h3>There's no checkIn for this record yet.</h3>
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="new-checkin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Create CheckIn</h3>
                </div>
                <form action="/patient/{{$patient->id}}/checkin" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>Write a brief Title and a detailed description on why this patient is checking into the clinic.</p>
                        <div class="row pad-all-3x">
                            <div class="col-xs-8">
                                <label for="title">Title</label>
                                <input type="text" class="edl-input input-rad input-brd-primary" name="title" id="title" placeholder="Reason of CheckIn">
                            </div>
                        </div>
                        <div class="row pad-all-3x">
                            <div class="col-xs-12">
                                <label for="title">Description</label>
                                <textarea name="description" id="description"
                                          style="display: block; width: 100%"
                                          cols="10" rows="10" class="input input-rad input-brd-primary">

                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection