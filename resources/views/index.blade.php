<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Users</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">All Users</h1>

    <!-- ✅ Flash messages (optional) -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('create') }}" class="btn btn-success mb-3">Create New User</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th width="200">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($requsers as $reguser)
            <tr>
                <td>{{ $reguser->name }}</td>
                <td>{{ $reguser->email }}</td>
                <td>
{{--                    <a href="{{ route('reguser.show', $reguser->id) }}" class="btn btn-info btn-sm">View</a>--}}
{{--                    <a href="{{ route('reguser.edit', $reguser->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                    <form action="{{ route('reguser.destroy', $reguser->id) }}" method="POST" style="display:inline;">--}}
                    <a href="" class="btn btn-info btn-sm">View</a>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- ✅ Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
