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
                    <td><a href="users/{{ $user->id }}/edit" class="btn btn-dark btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>