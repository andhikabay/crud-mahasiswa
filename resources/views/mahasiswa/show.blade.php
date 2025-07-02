@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="backdrop-blur-lg bg-white/10 border border-white/30 shadow-xl rounded-2xl p-8 w-full max-w-md space-y-6 text-white">

            <h2 class="text-2xl font-bold text-center">Detail Mahasiswa</h2>

            <div>
                <p class="text-sm text-white/70">Nama</p>
                <p class="text-lg font-semibold">{{ $mahasiswa->nama }}</p>
            </div>

            <div>
                <p class="text-sm text-white/70">NIM</p>
                <p class="text-lg font-semibold">{{ $mahasiswa->nim }}</p>
            </div>

            <div>
                <p class="text-sm text-white/70">Jurusan</p>
                <p class="text-lg font-semibold">{{ $mahasiswa->jurusan }}</p>
            </div>

            <div>
                <p class="text-sm text-white/70">Email</p>
                <p class="text-lg font-semibold">{{ $mahasiswa->email }}</p>
            </div>

            <div class="pt-4 text-center">
                <a href="{{ route('mahasiswa.index') }}" class="text-sm text-white/60 hover:underline">&larr; Kembali ke Daftar</a>
            </div>
        </div>
    </div>
@endsection
