@extends('layout')

@section('title', 'Pegawai')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <div class="bg-white shadow rounded p-6">
        <div class=flex justify-between mb-6>
            <h1 class="text-2xl font-bold">Tambah Pegawai</h1>
        </div>
    </div>
   <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama pegawai" class="w-full p-2 border rounded" />
            @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1">NIS</label>
            <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP pegawai" class="w-full p-2 border rounded" />
            @error('nip')<p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email pegawai" class="w-full p-2 border rounded" />
            @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1">Bidang</label>
            <input type="text" name="bidang" value="{{ old('bidang') }}" placeholder="Masukkan bidang pegawai" class="w-full p-2 border rounded" />
            @error('bidang')<p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        
        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="/pegawai" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Batal</a>
        </div>
        <div class="mt-4">
            <a href="/pegawai" class="text-blue-600 hover:text-blue-800">Kembali ke daftar pegawai</a>
        </div>
    </form>
</div>
@endsection
