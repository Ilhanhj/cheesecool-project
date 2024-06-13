@extends('dashboard.layouts.main')

@section('container')

  <!-- ========== MAIN CONTENT ========== -->

  
  <!-- Content -->
  <div class="w-full lg:ps-64 flex flex-col">
    <div class="flex py-3 lg:ps-8">
        @if(session()->has('success'))
        <div role="alert" class="relative flex w-9/12 mr-32 px-4 py-4 text-base text-white bg-green-500 rounded-lg font-regular mt-3">
            <div class="shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                </path>
              </svg>
            </div>
            <div class="ml-2 mr-12">{{ session('success') }}</div>
          </div>
        @endif
    </div>
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
          <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 mx-auto">
      <!-- Card -->
      <div class="flex flex-col">
       <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
           <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-800 dark:border-neutral-700">
          <!-- Header -->
             <div class="px-6 py-4  grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
              <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                Tabel Calon Mahasiswa
              </h2>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                Tambahkan Calon Mahasiswa, edit, delete di tabel ini.
              </p>
              <div class="pt-5 pb-2">
                <div class="inline-flex gap-x-2">
  
                  <a href="/dashboard/mahasiswa/create" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Tambah
                  </a>
                </div>
            </div>

            
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 ">
            <thead class=" dark:bg-slate-800">
              <tr>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      #
                    </span>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nama Calon Mahasiswa
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Asal Sekolah
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Program Studi
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Nilai Test
                    </span>
                    <div class="hs-tooltip">
                      <div class="hs-tooltip-toggle">
                        <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                          Jika Nilai Test lebih dari 80 maka Calon Mahasiswa LULUS
                        </span>
                      </div>
                    </div>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Status
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-end">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Action
                    </span>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-end">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      
                    </span>
                  </div>
                </th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @foreach ($calonMahasiswas as $calonMahasiswa)
              <tr class="bg-white hover: dark:bg-slate-900 dark:hover:bg-slate-950">
                <td class="size-px whitespace-nowrap">
                  
                    <span class="block px-6 py-2">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $loop->iteration }}</span>
                    </span>
                  
                </td>
                <td class="size-px whitespace-nowrap">
                  
                    <span class="block px-6 py-2">
                      <span class="py-1 inline-flex items-center gap-x-1 text-sm font-medium text-white">
                        {{ $calonMahasiswa->nama }}</span>
                    </span>
                  
                </td>
                <td class="size-px whitespace-nowrap">
                    <span class="block px-6 py-2">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $calonMahasiswa->asal_sekolah }}</span>
                    </span>
                </td>
                
                <td class="size-px whitespace-nowrap">
                  
                  <span class="block px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-neutral-400">
                      {{ $calonMahasiswa->jurusan->nama }}
                    </span>
                  </span>
                
              </td>
                <td class="size-px whitespace-nowrap">
                  
                  <span class="block px-6 py-2">
                    <span class="py-1 inline-flex items-center gap-x-1 text-sm font-medium text-white">
                      {{ $calonMahasiswa->nilai_test }}
                    </span>
                  </span>
                
              </td>
                <td class="size-px whitespace-nowrap">
                  @php
                      $status = $calonMahasiswa->nilai_test <= 80 ? 'tidak lulus' : 'lulus';
                  @endphp
                  <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium  rounded-full uppercase {{ $status == 'lulus' ? 'bg-teal-500/10 text-teal-500' : ' bg-red-500/10 text-red-500' }}">
                      </svg>
                    {{ $status }}
                    </span>
                  </span>
                
              </td>
                
                {{-- <td class="size-px whitespace-nowrap">
                  
                    {{-- <span class="block px-6 py-2">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">20 Dec, 09:27</span>
                    </span> --}}
                  
                {{-- </td>  --}}
                <td class="size-px whitespace-nowrap cursor-pointer">
                    <a href="/dashboard/jurusans/{{ $calonMahasiswa->id }}" class="">
                    <span class="px-6 py-1.5">
                      <span class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover: focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-yellow-600 transition-all text-sm dark:bg-yellow-500 dark:hover:bg-yellow-700 dark:border-neutral-700 dark:text-white dark:hover:text-white dark:focus:ring-offset-yellow-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M5 18.89H6.41421L15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89ZM21 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L9.24264 18.89H21V20.89ZM15.7279 6.74785L17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785Z"></path></svg>
                      Edit
                    </span>
                  </span>
                </a>
                  
                </td>
                <td class="size-px whitespace-nowrap cursor-pointer">
                  <form action="/dashboard/jurusans/{{ $calonMahasiswa->id }}" action="post">
                  @method('delete')
                  @csrf
                  <button class="" onclick="return confirm('Are you sure ?')">
                    <span class="px-6 py-1.5">
                      <span class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover: focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-600 transition-all text-sm dark:bg-red-500 dark:hover:bg-red-700 dark:border-neutral-700 dark:text-white dark:hover:text-white dark:focus:ring-offset-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path></svg>
                      Delete
                    </span>
                  </span>
                </button>
                  </form>
                  
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
            <div>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                <span class="font-semibold text-gray-800 dark:text-neutral-200"></span> 
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover: disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  <svg class="size-3" width="16" height="16" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.506 1.64001L4.85953 7.28646C4.66427 7.48172 4.66427 7.79831 4.85953 7.99357L10.506 13.64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  Prev
                </button>

                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover: disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  Next
                  <svg class="size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.50598 2L10.1524 7.64645C10.3477 7.84171 10.3477 8.15829 10.1524 8.35355L4.50598 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
  </div>
  </div>
<!-- End Table Section -->

          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div><!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
@endsection