@extends('layouts.app')

@section('title', 'Users Page')

@section('content')
<h1>Users Page</h1>

<a href="/users/create">Add New User</a>

@forelse ($users as $user)
    <p><strong>
        <a href="/users/{{ $user-> id }}">{{ $user->id }}</a>
       </strong> ({{ $user->name }})</p>
@empty
    <p>No users to show.</p>
@endforelse

@endsection