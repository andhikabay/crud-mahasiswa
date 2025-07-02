@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Tambah Mahasiswa</h2>

    @if ($errors->any())
        <div class="bg-red-500/20 text-red-200 px-4 py-3 rounded mb-4 text-sm">
            <ul class="space-y-1 list-disc pl-4">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="backdrop-blur-md bg-white/10 border border-white/20 shadow-xl p-8 rounded-2xl max-w-md space-y-5 text-white">
        @csrf
        <div>
            <label class="block text-sm mb-1">Nama</label>
            <input type="text" name="nama" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2 focus:outline-none" required>
        </div>
        <div>
            <label class="block text-sm mb-1">NIM</label>
            <input type="text" name="nim" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm mb-1">Jurusan</label>
            <input type="text" name="jurusan" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm mb-1">Email</label>
            <input type="email" name="email" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>

        <div class="flex justify-end gap-3 pt-2">
            <button class="bg-white/20 hover:bg-white/30 text-white px-5 py-2 rounded-md">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="text-sm text-white/60 hover:underline">Batal</a>
        </div>
    </form>
@endsection
