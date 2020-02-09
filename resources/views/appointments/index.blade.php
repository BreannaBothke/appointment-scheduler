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
                            <th scope="col">Record #</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $appointment)
                          <tr>
                            <th scope="row">{{ $appointment->id }}</th>
                            <td>{{ date('M d, yy', strtotime($appointment->date)) }}</td>
                            <td><a class="link" href="/appointments/{{ $appointment->id }}">View</a></td>
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