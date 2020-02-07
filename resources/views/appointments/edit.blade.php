@extends('layouts.app')

@section('title', 'Appointments Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                        <ul class="nav nav-pills card-header-pills float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="/appointments">Back</a>
                            </li>
                        </ul>
                </div>

                <div class="card-body">
                  
                    <h4 class="card-title text-center">Edit Appointment</h4>

                    <form id="edit" action="/appointments/{{ $appointment->id }}" method="post">

                        @method('PUT')

                        @include('appointments.form')
    
                        <button type="submit" form="edit" class="btn btn-primary mb-2">Update Appointment</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection