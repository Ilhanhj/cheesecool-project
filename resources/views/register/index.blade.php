@extends('layouts.main')

@section('container')

<div class="relative overflow-hidden before:absolute before:-top-60 lg:before:top-0 before:start-1/2 before:bg-glowBottom before:bg-no-repeat  before:bg-bottom before:size-full before:-z-[1] before:transform before:-translate-x-1/2" >
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('/images/register-bg.png')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full p-6 border border-gray-500 dark:bg-oldNavy rounded-md shadow-md">
                <h1 class="block text-2xl font-bold text-white md:text-3xl lg:text-4xl ">
                    <span class="font-bold  text-center lg:text-start text-transparent from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text pt-20">                    Jadilah Bagian dari Universitas Terbaik!
                    </span>
                    </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                     Daftarlah sekarang dan wujudkan impian Anda bersama Chesscool University ! Masa depan gemilang menanti Anda di sini
                </p>


                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" action="/register" method="post">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                        <input type="text" placeholder="Name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-teal-400 dark:focus:border-teal-400 focus:ring-teal-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('name')is-invalid @enderror" name="name" required value="{{ old('name') }}"/>
                        <label for="name">
                            @error('name')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Username</label>
                        <input type="text" placeholder="Username" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-teal-400 dark:focus:border-teal-400 focus:ring-teal-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('username')is-invalid @enderror" name="username"  required value="{{ old('username') }}"/>
                        <label for="username">
                            @error('username')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                        <input type="email" placeholder="Enter your email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-teal-400 dark:focus:border-teal-400 focus:ring-teal-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('email')is-invalid @enderror" name="email"  required value="{{ old('email') }}"/>
                        <label for="email">
                            @error('email')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                        <input type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-teal-400 dark:focus:border-teal-400 focus:ring-teal-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('password')is-invalid @enderror" name="password" required value="{{ old('password') }}" />
                        <label for="password">
                            @error('password')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <button type="submit"
                        class=" mt-10 inline-flex col-span-2 items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 dark:focus:ring-offset-gray-800">
                        <span>Register </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection