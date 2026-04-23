@extends('layout')

@section('title', 'Edit Data Denda')

@section('content')
<div class="max-w-2xl mx-auto p-8">
    <div class="bg-white p-6 rounded-lg shadow-lg border-t-4 border-yellow-500">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Data Denda</h2>

        <form action="{{ route('fines.update', $fine->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT') {{-- PENTING: Harus ada ini untuk Update --}}
            
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" value="{{ old('nama_peminjam', $fine->nama_peminjam) }}" 
                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-yellow-500 outline-none @error('nama_peminjam') border-red-500 @enderror">
                @error('nama_peminjam') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Jumlah Denda (Rp)</label>
                <input type="number" name="amount" value="{{ old('amount', $fine->amount) }}"
                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-yellow-500 outline-none @error('amount') border-red-500 @enderror">
                @error('amount') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Alasan Denda</label>
                <textarea name="reason" rows="3" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-yellow-500 outline-none @error('reason') border-red-500 @enderror">{{ old('reason', $fine->reason) }}</textarea>
                @error('reason') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700">Status</label>
                <select name="status" class="w-full p-2 border rounded-md bg-gray-50">
                    <option value="unpaid" {{ $fine->status == 'unpaid' ? 'selected' : '' }}>Belum Dibayar (UNPAID)</option>
                    <option value="paid" {{ $fine->status == 'paid' ? 'selected' : '' }}>Sudah Dibayar (PAID)</option>
                </select>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="bg-yellow-500 text-white px-8 py-2 rounded-md hover:bg-yellow-600 font-bold transition">
                    Update Data
                </button>
                <a href="{{ route('fines.index') }}" class="bg-gray-500 text-white px-8 py-2 rounded-md hover:bg-gray-600 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection