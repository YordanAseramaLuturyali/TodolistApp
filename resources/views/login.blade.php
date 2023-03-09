@extends('layout.main')

@section('container')
    <h1 class="text-center text-2xl font-bold mb-4">Masuk</h1>
    <form action="" method="post" class="flex flex-col">
        @csrf
        @if (session()->has('gagal'))
            <h1 class=" text-red-600">{{ session('gagal') }}</h1>
        @endif
        <label for="email" class="ml-8">Email:</label>
        <input type="email" id="email" name="email" class=" w-80 ml-8 p-1" required>
        @error('email')
            <h1>{{ $message }}</h1>
        @enderror

        <br>

        <label for="password" class="ml-8">Password:</label>
        <input type="password" id="password" name="password" class=" w-80 ml-8 p-1" required>
        @error('password')
            <h1>{{ $message }}</h1>
        @enderror

        <br>

        <button type="submit" class=" w-16 rounded ml-8 h-10 bg-[#2F58CD] text-white font-bold">Daftar</button>
    </form>
    <p class="ml-8 mt-2">Don't Have Account? <a href="\register" class=" text-[#2F58CD]">register now</a></p>
@endsection
