<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:students,email',
            'phone'      => 'required|string|max:20',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:students,email,' . $id,
            'phone'      => 'required|string|max:20',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
}
