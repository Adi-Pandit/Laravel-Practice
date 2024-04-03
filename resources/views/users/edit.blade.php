@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3>Edit User</h3>
                    <form method="POST" action="/users/{{$user->id}}/update">
                        @csrf
                        @method('PUT')
                        <div class="form-group py-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" />
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif

                        </div>
                        <div class="form-group py-2">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control" value="{{ old('surname', $user->surname) }}" />
                            @if($errors->has('surname'))
                                <span class="text-danger">{{ $errors->first('surname') }}</span>
                            @endif
                        </div>
                        <div class="form-group py-2">
                            <label>Contact Number</label>
                            <input type="number" name="contact_number" class="form-control" value="{{ old('contact_number', $user->contact_number) }}" />
                            @if($errors->has('contact_number'))
                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                            @endif
                        </div>
                        <div class="form-group py-2">
                            <label>Address</label>
                            <textarea name="address" rows="3" class="form-control"> {{ old('address', $user->address) }}</textarea>
                        </div>
                        <div class="form-group py-2">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth', $user->date_of_birth) }}" />
                            @if($errors->has('date_of_birth'))
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            @endif
                        </div>
                        <div class="form-group py-2">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" />
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark my-2">Submit</button>
                        <a href="/" class="btn btn-danger my-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection