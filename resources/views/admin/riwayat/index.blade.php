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
            <a href="{{ route('user.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded">add user</a >
        </div>

        <!-- Data Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-grey-300">
                <thead>
                    <tr class="bg-blue-600 text-white">

                        <th class="px-4 py-2 border border-gray-700">user</th>
                        <th class="px-4 py-2 border border-gray-700">nama buku</th>
                        <th class="px-4 py-2 border border-gray-700">nomor buku</th>
                        <th class="px-4 py-2 border border-gray-700">penerbit</th>
                        <th class="px-4 py-2 border border-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $item)

                    <tr class="bg-slate-100 hover:bg-blue-300">
                       <td class="px-4 py-2 border border-gray-700">{{ $item->user->name }}</td>

                        <td class="px-4 py-2 border border-gray-700">{{ $item->judul_buku }}</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $item->nomor_buku }}</td>
                        <td class="px-4 py-2 border border-gray-700">{{ $item->penerbit }}</td>
                        <td class="px-4 py-2 border border-gray-700">
                            {{-- <a href="{{ route('user.edit') }}" class="bg-blue-500 hover:bg-blue-600 px-2 text-white py-1 text-sm rounded">Edit</a> --}}
                            <form action="{{ route('riwayat.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-600 px-2 text-white py-1 text-sm rounded">
        Delete
    </button>
</form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
