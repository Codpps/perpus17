@extends('admin.dashboard')

@section('page')
    <div class="container mx-auto px-4 py-14">
        <h1 class="text-2xl text-white font-semibold mb-5">Edit Buku</h1>
        <form action="{{ route('buku.update', $bukus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updating -->

            <div class="mb-4">
                <label for="cover" class="text-lg text-white block mb-1">Cover</label>
                <input id="cover" type="file" name="cover" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">

                <!-- Display existing cover image -->
                @if($bukus->cover)
                    <img src="{{ asset('storage/cover/' . $bukus->cover) }}" alt="Cover Image" class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>

            <div class="mb-4">
                <label for="nama" class="text-lg text-white block mb-1">Nama</label>
                <input id="nama" type="text" name="nama" value="{{ old('nama', $bukus->nama) }}" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="text-lg text-white block mb-1">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">{{ old('deskripsi', $bukus->deskripsi) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="no_buku" class="text-lg text-white block mb-1">No Buku</label>
                <input id="no_buku" type="text" name="no_buku" value="{{ old('no_buku', $bukus->no_buku) }}" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="pengarang" class="text-lg text-white block mb-1">Pengarang</label>
                <input id="pengarang" type="text" name="pengarang" value="{{ old('pengarang', $bukus->pengarang) }}" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="isi" class="text-lg text-white block mb-1">Isi</label>
                <input id="isi" type="text" name="isi" value="{{ old('isi', $bukus->isi) }}" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-2 mt-4">Update</button>
        </form>
    </div>
@endsection
