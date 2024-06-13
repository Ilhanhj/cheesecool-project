@extends('dashboard.layouts.main')


@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="px-6 pt-6 2xl:container">
        <h1 class="text-2xl font-semibold text-white ml-3 py-3">Create Calon Mahasiswa Baru</h1>
        <hr class="ml-3"></div>

        <section class="max-w-4xl ml-9 mt-10 p-6 mx-auto  bg-white rounded-md shadow-md dark:bg-slate-800">
            <div class=" py-4 pb-10 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-slate-600">
                <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                  Form Calon Mahasiswa
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Tambahkan Calon Mahasiswa baru disini.
                </p>
              </div>
            </div>
            <form action="/dashboard/mahasiswa" method="post">
                @csrf
                <div class="pb-5">
                    <div class="py-3">
                        <label class="text-slate-700 dark:text-slate-200" for="nama">Nama</label>
                        <input id="nama" type="text" class="block w-full px-4 py-2 mt-2 text-slate-700 bg-white border border-slate-200 rounded-md dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('nama') 
                            is-invalid
                        @enderror" name="nama" required autofocus value="{{ old('nama') }}">
                    </div>
                    @error('nama')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="py-3">
                        <label class="text-slate-700 dark:text-slate-200" for="asal_sekolah">Asal Sekolah</label>
                        <input id="asal_sekolah" type="text" class="block w-full px-4 py-2 mt-2 text-slate-700 bg-white border border-slate-200 rounded-md dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('asal_sekolah') 
                            is-invalid
                        @enderror" name="asal_sekolah" required autofocus value="{{ old('asal_sekolah') }}">
                    </div>
                    @error('asal_sekolah')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="py-3">
                        <label class="text-slate-700 dark:text-slate-200" for="jurusan_id">Program Studi</label>
                        <select class="block w-full px-4 py-2 mt-2 text-slate-700 bg-white border border-slate-200 rounded-md dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" id="jurusan_id" name="jurusan_id" required autofocus value="{{ old('jurusan_id') }}"> 
                        @foreach ( $jurusans as $jurusan)
                         @if (old('jurusan_id') ==  $jurusan->id)
                             <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama }}</option>
                           @else
                             <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                         @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="py-3">
                        <label class="text-slate-700 dark:text-slate-200" for="nilai_test">Nilai Test</label>
                        <input id="nilai_test" type="number" class="block w-full px-4 py-2 mt-2 text-slate-700 bg-white border border-slate-200 rounded-md dark:bg-slate-800 dark:text-slate-300 dark:border-slate-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('nilai_test') 
                            is-invalid
                        @enderror" name="nilai_test" required autofocus value="{{ old('nilai_test') }}">
                    </div>
                    @error('nilai_test')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror         
                    <div class="flex justify-between gap-x-2 py-10">
                    <div class="inline-flex gap-x-2"> 
                        <a href="/dashboard/mahasiswa" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-slate-600 bg-transparent text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                  Kembali
                              </a>
                    </div>
                    <div class="">
                        <button  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Buat Calon Mahasiswa
                        </button>
                    </div>
        </div>       
        </form>
        </section>
</div>       


@endsection