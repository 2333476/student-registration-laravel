@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Student</h2>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
        </div>

        <div class="form-group mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection
