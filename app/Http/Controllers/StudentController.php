<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student; 

class StudentController extends Controller 
{
    public function index()
    {
        $students = student::all();
        return view('Students.Students', compact('students'));
    }

    public function create()
    {
        return view('Students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required',
            'nis'     => 'required|unique:students,nis', 
            'subject' => 'required',
            'score'   => 'required|numeric',
        ]);

        student::create($validated);  
        
        return redirect()->route('students.index')->with('success', 'Data student berhasil disimpan!');
    }

    public function edit(string $id)
    {
        $students = student::findOrFail($id);
        return view('students.edit', compact('students'));
    }

    public function update(Request $request, string $id)
    {
        $students = student::findOrFail($id);

        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'nis'     => 'required|unique:students,nis,' . $students->id,
            'subject' => 'required',
            'score'   => 'required|numeric|min:0|max:100',
        ]);

        $students->update($validated);
        return redirect()->route('students.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $students = student::findOrFail($id);
        $students->delete();

        return redirect()->route('students.index')->with('success', 'Data berhasil dihapus!');
    }
}