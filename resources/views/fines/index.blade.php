@extends('layout')

@section('title', 'Daftar Denda Perpustakaan')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Denda</h1>
        <a href="{{ route('fines.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow transition">
            + Tambah Denda Baru
        </a>
    </div>

    {{-- Notifikasi Flash Message --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4 shadow-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-800 text-white text-sm uppercase">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama Peminjam</th>
                    <th class="px-6 py-3">Jumlah (Rp)</th>
                    <th class="px-6 py-3">Alasan</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($fines as $index => $f)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 font-semibold">{{ $f->nama_peminjam }}</td>
                    <td class="px-6 py-4 text-red-600 font-bold">
                        Rp {{ number_format($f->amount, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $f->reason }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $f->status == 'paid' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ strtoupper($f->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 flex justify-center gap-3">
                        <a href="{{ route('fines.edit', $f->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                        <form action="{{ route('fines.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus denda ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-10 text-center text-gray-500 italic">Belum ada data denda.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection