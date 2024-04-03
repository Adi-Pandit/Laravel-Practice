@extends('layouts.app')

@section('main')
    <div class="container mt-3">
        <div class="float-end">
            <a href="users/create" class="btn btn-dark mt-2">New User</a>
        </div>
        <h1>Users</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            <thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->contact_number }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="users/{{ $user->id }}/view" class="btn btn-warning btn-sm">View</a>

                        <a href="users/{{ $user->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                        
                        <form method="POST" class="d-inline" action="users/{{ $user->id }}/delete" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection