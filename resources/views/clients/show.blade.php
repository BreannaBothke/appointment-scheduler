@extends('layouts.app')

@section('title', 'Client Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(Auth::check())

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
                                    <form class="nav-item" action="{{action('ClientController@destroy', $client->id)}}" onsubmit="return confirm('Are you sure?');" method="post">


                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                
                
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

                        <div class="card-text"><strong>DOB: </strong> <p>{{ date('M d, Y', strtotime($client->birthdate)) }}</p></div>

                        <div class="card-text"><strong>Phone Number: </strong> <p>{{ $client->phoneNumber }}</p></div>

                </div>
                @endif
                @if(Auth::guest())
                    <div class="card-text text-center">
                        <a href="/login" class="btn btn-info"> You need to login. >></a>
                    </div>
                @endguest
                
            </div>
        </div>
    </div>
</div>

@endsection