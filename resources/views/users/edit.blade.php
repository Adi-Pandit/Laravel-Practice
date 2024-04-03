<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">User</a>
        </div>
    </nav>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>