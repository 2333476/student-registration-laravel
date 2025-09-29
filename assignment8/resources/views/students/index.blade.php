@extends('layouts.app')

@section('content')
<h2>All Students</h2>

{{-- Success Message --}}
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">No students found.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection
