@extends('layouts.app')

@section('title', 'Clients Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clients</div>
                @if(Auth::check())

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="float-right btn btn-primary" href="/clients/create">Add New Client</a>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Record #</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                                <tr>
                                    <th scope="row">{{ $client->id }}</th>
                                    <td>{{ $client->name }}</td>
                                    <td><a class="link" href="/clients/{{ $client->id }}">View</a></td>

                                </tr>
                            @empty
                                <p>No clients to show.</p>
                                <tr>
                                    <th scope="row">#</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
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