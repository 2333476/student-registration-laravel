@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>

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

    <form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')


        <div class="form-group mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}">
        </div>

        <div class="form-group mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}">
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
        </div>

        <div class="form-group mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
        </div>

        <button type="submit" class="btn btn-primary">Update (stub only)</button>
    </form>
</div>
@endsection
