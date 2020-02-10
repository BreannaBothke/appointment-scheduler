@extends('layouts.app')

@section('title', 'Create Appointment Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::check())

                <div class="card-header">

                        <ul class="nav nav-pills card-header-pills float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="/appointments">Back</a>
                            </li>
                        </ul>
                </div>

                <div class="card-body">
                  
                    <h4 class="card-title text-center">Create Appointment</h4>

                    <form id="create" action="/appointments" method="post">

                        @method('POST')

                        @include('appointments.form')
    
                        <button type="submit" form="create" class="btn btn-primary mb-2">Create Appointment</button>


                    </form>
                </div>
                @else
                <div class="card-body">
                    <div class="card-text text-center">
                        <a href="/login" class="btn btn-info"> You need to login. >></a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection