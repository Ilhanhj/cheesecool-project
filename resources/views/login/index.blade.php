@extends('layouts.main')

@section('container')
<div class="relative overflow-hidden">
    <div class="before:absolute before:top-0 before:start-1/2 before:bg-glowRectBig before:bg-no-repeat before:bg-bottom before:size-full before:-z-[1] before:transform before:-translate-x-1/2" id="bg-gsap">
    <div class="flex justify-center items-start min-h-screen p-2">
        <div class="w-full max-w-md p-6 border border-gray-500 bg-[#030617] rounded-md shadow-md bg-white" id="auth-gsap">
            <div class="text-start">
                <h1 class="block text-2xl font-bold md:text-3xl lg:text-4xl text-center lg:text-start text-transparent from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text">
                    Welcome, TrailBlazer
                </h1>

                <p class="mt-4 text-gray-500 text-gray-400 text-justify">
                    Selamat datang di Portal Penerimaan Mahasiswa Universitas CheeseCool! unggah dokumen, dan alur pendaftaran yang mudah.
                </p>
            </div>

            <div class="mt-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm text-gray-600 text-gray-200">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-[#030617] border border-gray-200 rounded-md focus:outline-none focus:border-purple-500 focus:bg-white focus:ring focus:ring-purple-500 text-gray-300 border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-purple-500 focus:ring-opacity-60" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block mb-2 text-sm text-gray-600 text-gray-200">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-[#030617] border border-gray-200 rounded-md focus:outline-none focus:border-purple-500 focus:bg-white focus:ring focus:ring-purple-500 text-gray-300 border-gray-700 focus:border-purple-500 focus:bg-gray-900 focus:ring-purple-500 focus:ring-opacity-60" />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:ring-offset-gray-800">
                            Login
                        </button>
                    </div>
                </form>

                <p class="mt-6 text-sm text-center text-gray-400">Belum Punya Akun? <a href="{{ route('register') }}" class="text-purple-500 focus:outline-none focus:underline hover:underline">Register</a>.</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
