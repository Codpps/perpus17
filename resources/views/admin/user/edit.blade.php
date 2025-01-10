@extends('admin.dashboard')

@section('page')
    <div class="container mx-auto px-4 py-14">
        <h1 class="text-2xl text-white font-semibold mb-5">Edit User</h1>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="text-lg text-white block mb-1">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="email" class="text-lg text-white block mb-1">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="password" class="text-lg text-white block mb-1">Password (Leave blank to keep current password)</label>
                <input id="password" name="password" type="password" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="text-lg text-white block mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-2 mt-4">Update</button>
        </form>
    </div>
@endsection
