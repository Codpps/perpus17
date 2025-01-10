@extends('admin.dashboard');
@section('page')
    <div class="container mx-auto px-4 py-14">
        <h1 class="text-2xl text-white font-semibold mb-5">Tambah User</h1>
        <form action="">
            @csrf
            <div class="mb-4">
            <label for="username" class="text-lg text-white block mb-1">Username</label>
            <input id="username" type="text" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
              <div class="mb-4">
            <label for="email" class="text-lg text-white block mb-1">Email</label>
            <input id="email" type="text" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
            <div class="mb-4">
            <label for="password" class="text-lg text-white block mb-1">Password</label>
            <input id="password" type="text" class="w-full p-1 rounded-lg bg-gray-300 text-grey-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-2 mt-4">Tambah</button>
        </form>
    </div>

@endsection
