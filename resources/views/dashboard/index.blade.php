@extends('dashboard.layouts.main')

@section('container')

  <!-- ========== MAIN CONTENT ========== -->

  
  <!-- Content -->
  <div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:px-8 ">

  
        <!-- Card Total Calon Mahasiswa -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                TOTAL CALON MAHASISWA
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $calonMahasiswa->count() }}
              </h3>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card Lulus -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
                  <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                      <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        LULUS
                      </p>
                    </div>
          
                    <div class="mt-1 flex items-center gap-x-2">
                      <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        {{ number_format(($calonMahasiswa->where('nilai_test', '>=', 80)->count() / $calonMahasiswa->count()) * 100, 1) }}%
                      </h3>
                      <span class="flex items-center gap-x-1 text-green-600">
                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                        <span class="inline-block text-sm">
                          %
                        </span>
                      </span>
                    </div>
                  </div>
        </div>
        <!-- End Card -->

         <!-- Card Tidak Lulus -->
         <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                TIDAK LULUS
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ number_format(($calonMahasiswa->where('nilai_test', '<', 80)->count() / $calonMahasiswa->count()) * 100, 1) }}%
              </h3>
              <span class="flex items-center gap-x-1 text-red-600">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
                <span class="inline-block text-sm">
                  %
                </span>
              </span>
            </div>
          </div>
         </div>
         <!-- End Card -->

        
  
        <!-- Card Program Studi -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                PROGRAM STUDI
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $jurusan->count() }}
              </h3>
            </div>
          </div>
        </div>
        <!-- End Card -->
        

        <!-- Card Teknik Informatika-->
        <div class="grid col-span-2">

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Teknik Informatika
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 1)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
        </div>
        <!-- End Card -->
        

        <!-- Card Bisnis Internasional-->
        <div class="grid col-span-2">

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM15 7H9V19H15V7ZM7 7H4V19H7V7ZM17 7V19H20V7H17ZM9 3V5H15V3H9Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Bisnis Internasional
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 2)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
        </div>
        <!-- End Card -->

        <!-- Card  Desain Grafis-->
        <div class="grid col-span-2">

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M15.4565 9.67503L15.3144 9.53297C14.6661 8.90796 13.8549 8.43369 12.9235 8.18412C10.0168 7.40527 7.22541 9.05273 6.43185 12.0143C6.38901 12.1742 6.36574 12.3537 6.3285 12.8051C6.17423 14.6752 5.73449 16.0697 4.5286 17.4842C6.78847 18.3727 9.46572 18.9986 11.5016 18.9986C13.9702 18.9986 16.1644 17.3394 16.8126 14.9202C17.3306 12.9869 16.7513 11.0181 15.4565 9.67503ZM13.2886 6.21301L18.2278 2.37142C18.6259 2.0618 19.1922 2.09706 19.5488 2.45367L22.543 5.44787C22.8997 5.80448 22.9349 6.37082 22.6253 6.76891L18.7847 11.7068C19.0778 12.8951 19.0836 14.1721 18.7444 15.4379C17.8463 18.7897 14.8142 20.9986 11.5016 20.9986C8 20.9986 3.5 19.4967 1 17.9967C4.97978 14.9967 4.04722 13.1865 4.5 11.4967C5.55843 7.54658 9.34224 5.23935 13.2886 6.21301ZM16.7015 8.09161C16.7673 8.15506 16.8319 8.21964 16.8952 8.28533L18.0297 9.41984L20.5046 6.23786L18.7589 4.4921L15.5769 6.96698L16.7015 8.09161Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Desain Grafis
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 3)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
        </div>
        <!-- End Card -->
        
        <!-- Card Teknik Sipil-->
        <div class="grid col-span-2">

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Teknik Sipil
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 4)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
        </div>
        <!-- End Card -->

        <!-- Card Ilmu Komunikasi-->
        <div class="grid col-span-2">


        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg  class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M16.9337 8.96494C16.426 5.03562 13.0675 2 9 2 4.58172 2 1 5.58172 1 10 1 11.8924 1.65707 13.6313 2.7555 15.0011 3.56351 16.0087 4.00033 17.1252 4.00025 18.3061L4 22H13L13.001 19H15C16.1046 19 17 18.1046 17 17V14.071L18.9593 13.2317C19.3025 13.0847 19.3324 12.7367 19.1842 12.5037L16.9337 8.96494ZM3 10C3 6.68629 5.68629 4 9 4 12.0243 4 14.5665 6.25141 14.9501 9.22118L15.0072 9.66262 16.5497 12.0881 15 12.7519V17H11.0017L11.0007 20H6.00013L6.00025 18.3063C6.00036 16.6672 5.40965 15.114 4.31578 13.7499 3.46818 12.6929 3 11.3849 3 10ZM21.1535 18.1024 19.4893 16.9929C20.4436 15.5642 21 13.8471 21 12.0001 21 10.153 20.4436 8.4359 19.4893 7.00722L21.1535 5.89771C22.32 7.64386 23 9.74254 23 12.0001 23 14.2576 22.32 16.3562 21.1535 18.1024Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Ilmu Komunikasi
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 5)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
      </div>
        <!-- End Card -->

        <!-- Card Teknik Elektro-->
        <div class="grid col-span-2">

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 9H21L11 24V15H4L13 0V9ZM11 11V7.22063L7.53238 13H13V17.3944L17.263 11H11Z"></path></svg>
            <div class="flex items-center gap-x-2 pt-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Calon mahasiswa Teknik Elektro
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
              {{ number_format(($calonMahasiswa->where('jurusan_id', 6)->count() / $calonMahasiswa->count()) * 100, 1) }}%              
            </h3>
            </div>
          </div>
        </div>
        </div>
        <!-- End Card -->
        
      </div>
      
      <!-- End Grid -->
  </div>
  
<!-- End Table Section -->

          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
@endsection