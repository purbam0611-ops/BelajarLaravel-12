@extends('layout')

@section('title', 'Students Learning Progress')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Progres Belajar Siswa</h1>
        <a href="{{ route('students.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
    Tambah Data Siswa
</a>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
    <tr>
        <th class="px-4 py-3 text-left text-xs font-bold text-gray-600 uppercase">No</th>
        <th class="px-4 py-3 text-left text-xs font-bold text-gray-600 uppercase">nama</th>
        <th class="px-4 py-3 text-left text-xs font-bold text-gray-600 uppercase">nis</th>
        <th class="px-4 py-3 text-left text-xs font-bold text-gray-600 uppercase">subject</th>
        <th class="px-4 py-3 text-left text-xs font-bold text-gray-600 uppercase">score</th>

        <th class="px-4 py-3 text-center text-xs font-bold text-gray-600 uppercase">Aksi</th>
    </tr>
</thead>
<tbody class="bg-white divide-y divide-gray-100">
   @foreach($students as $index => $s)
<tr class="hover:bg-gray-50 transition border-b">
    <td class="px-4 py-4 text-sm">{{ $index + 1 }}</td>
    <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $s->nama }}</td>
    <td class="px-4 py-4 text-sm text-gray-600">{{ $s->nis }}</td>
    <td class="px-4 py-4 text-sm text-gray-600">{{ $s->subject }}</td>
    <td class="px-4 py-4 text-sm text-gray-600">{{ $s->score }}</td>
    
    <td class="px-4 py-4 text-center">
        <div class="flex justify-center gap-2">
            {{-- Tombol Edit --}}
            <a href="{{ route('students.edit', $s->id) }}" 
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs">
               Edit
            </a>

            <form action="{{ route('students.destroy', $s->id) }}" method="POST" 
                  onsubmit="return confirm('Yakin ingin menghapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs">
                        Hapus
                </button>
            </form>
        </div>
    </td>
</tr>
@endforeach