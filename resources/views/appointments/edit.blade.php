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

                        <form id="update" action="/appointments/{{ $appointment->id }}" method="POST" data-parsley-validate>
                            @include('appointments.form')
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button type="submit" form="update" class="btn btn-primary mb-2">Update Appointment</button>

                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection