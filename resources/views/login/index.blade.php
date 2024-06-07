@extends('layouts.main')

@section('container')
<div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-glowRect before:bg-no-repeat before:bg-bottom before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md p-6 border border-gray-500 dark:bg-[#030617] rounded-md shadow-md bg-white">
        <div class="text-center">
            <h2 class="text-2xl font-normal text-transparent sm:text-3xl bg-gradient-to-r bg-clip-text from-pink-600 via-purple-580 to-purple-700 inline-block">Welcome, TrailBlazer</h2>
            <p class="mt-3 text-gray-500 text-justify dark:text-gray-500">Selamat datang di Portal Penerimaan Mahasiswa Universitas CheeseCool! Kelola aplikasi, unggah dokumen, dan alur pendaftaran yang mudah. Kami siap menyertai perjalanan pendidikan Anda!</p>
        </div>

        <div class="mt-6">
            <form>
                <div>
                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 dark:bg-[#030617] border border-gray-200 rounded-lg focus:outline-none focus:border-purple-500 focus:bg-white focus:ring focus:ring-purple-500 dark:text-gray-300 dark:border-gray-700 dark:focus:border-purple-500 dark:focus:bg-gray-900 dark:focus:ring-purple-500 dark:focus:ring-opacity-60" />
                </div>

                <div class="mt-6">
                    <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 dark:bg-[#030617] border border-gray-200 rounded-lg focus:outline-none focus:border-purple-500 focus:bg-white focus:ring focus:ring-purple-500 dark:text-gray-300 dark:border-gray-700 dark:focus:border-purple-500 dark:focus:bg-gray-900 dark:focus:ring-purple-500 dark:focus:ring-opacity-60" />
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 dark:focus:ring-offset-gray-800">
                        Login
                    </button>

                </button>
                </div>
            </form>

            <p class="mt-6 text-sm text-center text-gray-400">Belum Punya Akun ? <a href="/register" class="text-purple-500 focus:outline-none focus:underline hover:underline">Register</a>.</p>
        </div>
    </div>
</div>
</div>
@endsection
