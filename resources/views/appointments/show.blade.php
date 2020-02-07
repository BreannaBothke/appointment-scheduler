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
                            <ul class="nav nav-pills card-header-pills float-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="/appointments/{{ $appointment->id }}/edit">Edit</a>
                                </li>
                                <li class="nav-item">
                                    {{-- <form class="nav-item" action="/appointments/{{ $appointment->id }}" method="post">
                                        @method('DELETE')
                        
                                        @csrf
                            
                                        <a href="/appointments" class="nav-link" role="button">Delete</a>
                        
                                    </form> --}}
                                    {{-- <form class="nav-item" id="delete" action="/appointments/{{ $appointment->id }}" method="post"> --}}
                                    <form class="nav-item" action="{{action('AppointmentController@destroy', $appointment->id)}}" method="post">

                                        {{-- @method('delete')
                                    
                                        <button type="submit" form="delete" class="btn btn-primary mb-2">Delete Appointment</button> --}}

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

                        <div class="card-text"><strong>Date of Appointment: </strong> <p>{{ $appointment->date }}</p></div>

                        <div class="card-text"><strong>Client Name: </strong> <p>{{ $client->name }}</p></div>

                        <div class="card-text"><strong>Scheduled to meet with: </strong> {{ $user->name }}</div>


{{-- <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Appointment Id</th>
        <th scope="col">Client Id</th>
        <th scope="col">Client Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $appointment->id }}</th>
        <td>{{ $appointment->client_id }}</td>
        <td><a href="/appointments/{{ $client->name }}">Client Name</a></td>
        <td>
            
                {{-- <button><a href="/appointments/{{ $appointment->id }}/edit">Edit</a></button> --}}
                    {{-- <a href="{{ url('/appointments/' . $appointment->id . '/edit') }}" >Edit</a>
                    <form action="/appointments/{{ $appointment->id }}" method="post">
                        @method('DELETE')
            
                        @csrf
                    
                        <a href="#" role="button">Delete</a>
        
                        {{-- <button class="btn btn-sm btn-secondary pull-right">Delete</button> --}}
                    {{-- </form>
            
        </td>
       
      </tr>
    </tbody>
  </table> --}} 



                </div>
            </div>
        </div>
    </div>
</div>

@endsection