@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <h3 class="mb-5">User Information</h3>
                <p>Name: <b>{{ $user->name }}</b></p>
                <p>Surname: <b>{{ $user->surname }}</b></p>
                <p>Contact Number: <b>{{ $user->contact_number }}</b></p>
                <p>Address: <b>{{ $user->address ? $user->address : '-' }}</b></p>
                <p>Date of Birth: <b>{{ $user->date_of_birth }}</b></p>
                <p>Email: <b>{{ $user->email }}</b></p>
                <div class="row">
                    <div class="col-auto">
                        <a href="/" class="btn btn-danger my-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection