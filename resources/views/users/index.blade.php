@extends('layouts.app')

@section('title', 'Users Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="float-right btn btn-primary" href="/users/create">Add New User</a>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                                </tr>
                            @empty
                                <p>No Users to show.</p>
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