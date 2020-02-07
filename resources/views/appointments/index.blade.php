@extends('layouts.app')

@section('title', 'Appointments Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Appointments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="float-right btn btn-primary" href="/appointments/create">Add New Appointment</a>

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $appointment)
                          <tr>
                            <th scope="row">{{ $appointment->id }}</th>
                            <td><a href="/appointments/{{ $appointment->id }}">Client Name</a></td>
                            <td>{{ $appointment->date }}</td>
                          </tr>
                            @empty
                            <p>No appointments to show.</p>
                            <tr>
                                <th scope="row">#</th>
                                <td>N/A</td>
                                <td>N/A</td>
                              </tr>
                        @endforelse
            
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection