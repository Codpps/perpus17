@extends('admin.dashboard')
  
@section('page')
    <div class="container mx-auto px-4 py-14">
        <h1 class="text-2xl text-white font-semibold mb-5">Tambah User</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Username (Name) Field -->
            <div class="mb-4">
                <label for="username" class="text-lg text-white block mb-1">Username</label>
                <input id="username" name="name" type="text" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" placeholder="Enter username" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="text-lg text-white block mb-1">Email</label>
                <input id="email" name="email" type="email" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" placeholder="Enter email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="text-lg text-white block mb-1">Password</label>
                <input id="password" name="password" type="password" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" placeholder="Enter password" value="{{ old('password') }}">
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Confirmation Field -->
            <div class="mb-4">
                <label for="password_confirmation" class="text-lg text-white block mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="w-full p-2 rounded-lg bg-gray-300 text-gray-700 border-blue-400 border-2 placeholder:text-gray-700 focus:ring-1 focus:ring-blue-400 focus:outline-none" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-2 mt-4">Tambah</button>
        </form>
    </div>
@endsection
