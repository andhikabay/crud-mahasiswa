@extends('layouts.app')

@section('content')
<div class="animate-fade-up">

    <h2 class="text-3xl font-bold mb-4">Daftar Mahasiswa</h2>

    @if(session('success'))
        <div class="bg-green-600/30 text-green-200 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('mahasiswa.create') }}"
           class="relative inline-flex items-center gap-2 px-4 py-2 rounded-md text-sm font-medium text-white bg-white/10 backdrop-blur-md border border-white/30 shadow-md hover:shadow-xl hover:bg-white/20 transition-all duration-300 ease-in-out overflow-hidden group">
            <span class="z-10">+ Tambah</span>
            <span class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-10 transition duration-300 ease-in-out blur-md"></span>
        </a>
    </div>

    <div class="overflow-x-auto rounded-xl backdrop-blur-lg bg-white/10 border border-white/20 shadow-lg">
        <table class="min-w-full text-left text-white text-sm">
            <thead class="bg-white/10 text-white/80 uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">NIM</th>
                    <th class="px-6 py-4">Jurusan</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mhs)
                <tr class="hover:bg-white/5 transition">
                    <td class="px-6 py-3">{{ $mhs->nama }}</td>
                    <td class="px-6 py-3">{{ $mhs->nim }}</td>
                    <td class="px-6 py-3">{{ $mhs->jurusan }}</td>
                    <td class="px-6 py-3">{{ $mhs->email }}</td>
                    <td class="px-6 py-3 text-right space-x-2">
                        <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="text-white/80 hover:underline text-sm">Show</a>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-cyan-300 hover:underline text-sm">Edit</a>
                        <label for="modal-hapus"
                            onclick="setDeleteId({{ $mhs->id }})"
                            class="text-red-300 hover:underline text-sm cursor-pointer">
                            Hapus
                        </label>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<input type="checkbox" id="modal-hapus" class="hidden peer" />
<div class="fixed inset-0 z-50 bg-black/40 backdrop-blur-sm flex items-center justify-center peer-checked:flex hidden transition duration-300">
    <div class="bg-white/10 border border-white/30 text-white backdrop-blur-lg p-6 rounded-xl w-[90%] max-w-sm shadow-xl space-y-5 animate-fade-up">
        <div class="w-12 h-12 mx-auto bg-red-500/30 text-red-200 flex items-center justify-center rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-4 0a1 1 0 00-1 1v1h6V4a1 1 0 00-1-1m-4 0h4" />
            </svg>
        </div>

        <h3 class="text-lg font-bold text-center">Yakin ingin menghapusnya?</h3>
        <p class="text-sm text-center text-white/70">Data ini akan dihapus secara permanen.</p>

        <form id="form-delete" method="POST">
            @csrf
            @method('DELETE')
            <div class="flex justify-end gap-3">
                <label for="modal-hapus"
                    class="px-4 py-2 rounded bg-white/20 hover:bg-white/30 text-sm cursor-pointer">
                    Batal
                </label>
                <button type="submit"
                    class="px-4 py-2 rounded bg-red-500 hover:bg-red-600 text-sm">
                    Yakin
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function setDeleteId(id) {
        const form = document.getElementById('form-delete');
        form.action = `/mahasiswa/${id}`;
    }
</script>
@endsection
