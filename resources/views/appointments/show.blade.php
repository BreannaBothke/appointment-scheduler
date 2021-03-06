@extends('layouts.app')

@section('title', 'Appointments Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(Auth::check())
                        @if(Auth::user()->id == $appointment->user_id)

                        <ul class="nav nav-pills card-header-pills float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="/appointments">Back</a>
                            </li>
                            </ul>
                            <ul class="nav nav-pills card-header-pills float-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="/appointments/{{ $appointment->id }}/edit">Edit</a>
                                </li>
                                <li class="nav-item">
                                    <form class="nav-item" action="{{action('AppointmentController@destroy', $appointment->id)}}" onsubmit="return confirm('Are you sure?');" method="post">


                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                
                
                                    </form>
                                </li>
                         
                            </ul>
                </div>

                <div class="card-body">

                
                        <h4 class="card-title text-center">Appointment Details</h4>

                        <div class="card-text"><strong>Appointment Id: </strong> <p>{{ $appointment->id }}</p></div>

                        <div class="card-text"><strong>Date of Appointment: </strong> <p>{{ date('M d, Y', strtotime($appointment->date)) }}</p></div>

                        <div class="card-text"><strong>Client Name: </strong> <p>{{ $client->name }}</p></div>

                        <div class="card-text"><strong>Scheduled to meet with: </strong> {{ $user->name }}</div>


                </div>
                    @else
                    <div class="card-text text-center">
                        <a href="/appointments" class="btn btn-info"> Access Denied.</a>
                    </div>
                    @endif
                @endif
                @if(Auth::guest())
                <div class="card-text text-center">
                    <a href="/login" class="btn btn-info"> You need to login. >></a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection