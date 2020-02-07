@extends('layouts.app')

@section('title', 'Clients Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clients</div>

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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                                <tr>
                                    <th scope="row">{{ $client->id }}</th>
                                    <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
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
            </div>
        </div>
    </div>
</div>
@endsection