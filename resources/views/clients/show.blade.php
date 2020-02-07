@extends('layouts.app')

@section('title', 'Client Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                        <ul class="nav nav-pills card-header-pills float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="/clients">Back</a>
                            </li>
                            </ul>
                            <ul class="nav nav-pills card-header-pills float-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="/clients/{{ $client->id }}/edit">Edit</a>
                                </li>
                                <li class="nav-item">
                                    <form class="nav-item" action="/clients/{{ $client->id }}" method="post">
                                        @method('DELETE')
                        
                                        @csrf
                            
                                        <a href="#" class="nav-link" role="button">Delete</a>
                        
                                    </form>
                                </li>
                         
                            </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                
                        <h4 class="card-title text-center">Client Details</h4>

                        <div class="card-text"><strong>Client Id: </strong> <p>{{ $client->id }}</p></div>

                        <div class="card-text"><strong>Client Name: </strong> <p>{{ $client->name }}</p></div>

                        <div class="card-text"><strong>Email: </strong> <p>{{ $client->email }}</p></div>

                        <div class="card-text"><strong>DOB: </strong> <p>{{ $client->birthdate }}</p></div>

                        <div class="card-text"><strong>Phone Number: </strong> <p>{{ $client->phoneNumber }}</p></div>


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