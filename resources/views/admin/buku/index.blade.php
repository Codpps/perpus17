@extends('admin.dashboard');
@section('page')
    <div class="container mx-auto px-4 py-14">

        <!-- Search and Filter Section -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex gap-2">
                <input type="text" placeholder="Search..." class="w-64 p-2 bg-gray-300 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <select class="p-2 bg-gray-300 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-40">
                    <option value="">All Categories</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                </select>
            </div>
            <a href="{{ route('buku.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded">add buku</a >
        </div>

        <!-- Data Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-grey-300">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="px-4 py-2 border border-gray-700">No</th>
                        <th class="px-4 py-2 border border-gray-700">Cover</th>
                        <th class="px-4 py-2 border border-gray-700">Nama</th>
                        <th class="px-4 py-2 border border-gray-700">Deskripsi</th>
                        <th class="px-4 py-2 border border-gray-700">No Buku</th>
                        <th class="px-4 py-2 border border-gray-700">Pengarang</th>
                        <th class="px-4 py-2 border border-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukus as $buku)
                    <tr class="bg-slate-100 hover:bg-blue-300">
                        <td class="px-4 py-2 border border-gray-700">{{ $buku->id }}</td>
                        <td class="px-4 py-2 border border-gray-700">
    <img src="{{ asset('storage/cover/' . $buku->cover) }}" alt="Cover Image" class="w-24 h-24 object-cover">
</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $buku->nama }}</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $buku->deskripsi }}</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $buku->no_buku }}</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $buku->pengarang }}</td>
                        <td class="px-4 py-2 border border-gray-700">
                            <a href="{{ route('buku.edit', $buku->id) }}" class="bg-blue-500 hover:bg-blue-600 px-2 text-white py-1 text-sm rounded">Edit</a>

<!-- Delete Button -->
<form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-600 px-2 text-white py-1 text-sm rounded">Delete</button>
</form>

                        </td>
                    </tr>
                    @endforeach
                    <!-- Repeat rows as necessary -->
                </tbody>
            </table>
        </div>
    </div>

@endsection
