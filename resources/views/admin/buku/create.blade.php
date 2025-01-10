@extends('admin.dashboard')
@section('page')
    <div class="container mx-auto px-4 py-14">
        <h1 class="text-2xl text-white font-semibold mb-5">Tambah Buku</h1>
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="cover" class="text-lg text-white block mb-1">Cover</label>
                <input id="cover" type="file" name="cover" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="nama" class="text-lg text-white block mb-1">Nama</label>
                <input id="nama" type="text" name="nama" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="text-lg text-white block mb-1">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" cols="5" rows="10"></textarea>
            </div>
            <div class="mb-4">
                <label for="no_buku" class="text-lg text-white block mb-1">No Buku</label>
                <input id="no_buku" type="text" name="no_buku" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="pengarang" class="text-lg text-white block mb-1">Pengarang</label>
                <input id="pengarang" type="text" name="pengarang" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
             <div class="mb-4">
                <label for="penerbit" class="text-lg text-white block mb-1">Penerbit</label>
                <input id="penerbit" type="text" name="penerbit" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
          <div class="mb-4">
    <label for="kategori" class="text-lg text-white block mb-1">Kategori</label>
    <select id="kategori" name="kategori" class="w-full p-1 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 focus:ring-1 focus:ring-blue-400 focus:outline-none">
        <option value="" disabled selected>Pilih kategori</option>
        <?php
        $categories = ['Fiksi', 'Nonfiksi', 'Buku Anak', 'Referensi', 'Buku Akademik', 'Hobi & Keterampilan', 'Sastra', 'Lainnya'];
        foreach ($categories as $category) {
            echo "<option value=\"$category\">$category</option>";
        }
        ?>
    </select>
</div>

             <div class="mb-4">
                <label for="isi" class="text-lg text-white block mb-1">Isi</label>
                <textarea name="isi" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" id="isi" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-2 mt-4">Tambah</button>
        </form>
    </div>
@endsection
