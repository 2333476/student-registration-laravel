<!DOCTYPE html>
<html>
<head>
    <title>Student Registration System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('students.index') }}">Students</a>
            <a class="btn btn-success" href="{{ route('students.create') }}">
                <i class="fas fa-plus"></i> Add Student
            </a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
