@extends('layouts.app')

@section('title', 'Create Clients Page')

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
                        
                        <h4 class="card-title text-center">Add New Client</h4>

                        <form id="create" action="/clients" method="post">

                            @method('POST')
    
                            @include('clients.form')
        
                            <button type="submit" form="create" class="btn btn-primary mb-2">Create Client</button>
    
    
                        </form>
                   </div>
                </div>
           </div>
        </div>
</div>

@endsection