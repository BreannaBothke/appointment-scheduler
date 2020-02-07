@extends('layouts.app')

@section('title', 'Edit Client')

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
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title text-center">Edit Client</h4>

                    <form id="edit" action="/clients/{{ $client->id }}" method="post">

                        @method('PUT')

                        @include('clients.form')
    
                        <button type="submit" form="edit" class="btn btn-primary mb-2">Update Client</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection