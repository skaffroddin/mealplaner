@extends('layouts.admin')

@section('content')
    <h1>User Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">Blocked: {{ $user->blocked ? 'Yes' : 'No' }}</p>
        </div>
    </div>

    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete User</button>
    </form>
    <form action="{{ route('admin.users.block', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-secondary">Block User</button>
    </form>
    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Back to Users</a>
@endsection
