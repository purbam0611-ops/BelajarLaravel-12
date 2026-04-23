@extends('layout')

@section('title', 'Edit Progres Siswa')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <div class="bg-white shadow rounded p-6 mb-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Edit Progres Siswa</h1>
            <span class="text-sm text-gray-500">ID Siswa: #{{ $students->id }}</span>
        </div>
    </div>

    {{-- Form mengarah ke /students/ID dengan method PUT --}}
    <form action="/students/{{ $students->id }}" method="POST" class="bg-white shadow rounded p-6 space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium text-gray-700">nama</label>
            <input type="text" name="nama" value="{{ old('nama', $students->nama) }}" 
                   placeholder="Masukkan nama siswa" 
                   class="w-full p-2 border rounded @error('nama') border-red-500 @enderror" />
            @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-700">nis</label>
            <input type="text" name="nis" value="{{ old('nis', $students->nis) }}" 
                   placeholder="Masukkan NIS siswa" 
                   class="w-full p-2 border rounded @error('nis') border-red-500 @enderror" />
            @error('nis') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-700">subject</label>
            <input type="text" name="subject" value="{{ old('subject', $students->subject) }}" 
                   placeholder="Contoh: Matematika" 
                   class="w-full p-2 border rounded @error('subject') border-red-500 @enderror" />
            @error('subject') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-700">score(0-100)</label>
            <input type="number" name="score" value="{{ old('score', $students->score) }}" 
                   placeholder="Masukkan nilai" 
                   class="w-full p-2 border rounded @error('score') border-red-500 @enderror" />
            @error('score') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        
        <div class="flex gap-3 mt-8 pt-4 border-t">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 font-semibold transition">
                Simpan Perubahan
            </button>
            <a href="/students" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection