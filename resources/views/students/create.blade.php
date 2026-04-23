@extends('layout')

@section('title', 'Tambah Progres Siswa')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-6">Tambah Progres Belajar</h2>

    {{-- Error Validation --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
    @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama Siswa</label>
            <input type="text" name="nama" class="w-full border rounded p-2" value="{{ old('nama') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">NIS</label>
            <input type="text" name="nis" class="w-full border rounded p-2" value="{{ old('nis') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Subject</label>
            <input type="text" name="subject" class="w-full border rounded p-2" value="{{ old('subject') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Score</label>
            <input type="number" name="score" class="w-full border rounded p-2" value="{{ old('score') }}">
        </div>
        <div class="flex justify-between">
            <a href="{{ route('students.index') }}" class="text-gray-600 py-2">Kembali</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan Data</button>
        </div>
    </form>
</div>
@endsection