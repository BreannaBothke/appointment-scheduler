@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                        <ul class="nav nav-pills card-header-pills float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="/users">Back</a>
                            </li>
                        </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title text-center">Edit User</h4>

                    <form id="edit" action="/users/{{ $user->id }}" method="post">

                        @method('PUT')

                        @include('users.form')
    
                        <button type="submit" form="edit" class="btn btn-primary mb-2">Update User</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection