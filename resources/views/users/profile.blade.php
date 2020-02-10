@extends('layouts.app')

@section('title', 'User Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                            <ul class="nav nav-pills card-header-pills float-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="/users/{{ $user->id }}/edit">Edit</a>
                                </li>
                         
                            </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                
                        <h4 class="card-title text-center">User Profile</h4>

                        <div class="card-text"><strong>User Name: </strong> <p>{{ $user->name }}</p></div>

                        <div class="card-text"><strong>Email: </strong> <p>{{ $user->email }}</p></div>

                        <div class="card-text"><strong>Password: </strong> <p>{{ $user->password }}</p></div>
                        
                        <div class="card-text"><a href="/change-password" class="btn btn-primary">Change Password</a></div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection