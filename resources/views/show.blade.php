<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>User Details</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $userId->name }}</p>
            <p><strong>Email:</strong> {{ $userId->email }}</p>
            <p><strong>Created At:</strong> {{ $userId->created_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <a href="{{ route('reguser.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

