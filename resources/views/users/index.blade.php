@extends('layouts.app')

@section('title', 'Users Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Users</div>

                @if (Auth::user()->name == 'Admin')

                <div class="card-body">

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
                    @else
                    <a href="/home" class="btn btn-info"> You do not have access to this resource. >></a>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection