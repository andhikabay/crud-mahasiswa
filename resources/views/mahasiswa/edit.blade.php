@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="backdrop-blur-md bg-white/10 border border-white/20 shadow-xl p-8 rounded-2xl max-w-md space-y-5 text-white">
        @csrf @method('PUT')

        <div>
            <label class="block text-sm mb-1">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm mb-1">NIM</label>
            <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm mb-1">Jurusan</label>
            <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}" class="w-full bg-white/10 border border-white/20 rounded px-4 py-2" required>
        </div>

        <div class="flex justify-end gap-3 pt-2">
            <button class="bg-white/20 hover:bg-white/30 text-white px-5 py-2 rounded-md">Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="text-sm text-white/60 hover:underline">Batal</a>
        </div>
    </form>
@endsection
