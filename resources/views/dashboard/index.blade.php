@extends('dashboard.layouts.main')

@section('container')

  <!-- ========== MAIN CONTENT ========== -->

  
  <!-- Content -->
  <div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:px-8">

  
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                TOTAL CALON MAHASISWA
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                150
              </h3>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
                  <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                      <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        LU
                      </p>
                      <div class="hs-tooltip">
                        <div class="hs-tooltip-toggle">
                          <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                            The number of daily users
                          </span>
                        </div>
                      </div>
                    </div>
          
                    <div class="mt-1 flex items-center gap-x-2">
                      <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        72,540
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
  
        <!-- Card -->

        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                TIDAK LULUS
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                56.8%
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
  
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-800   dark:border-neutral-700">
          <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                PROGRAM STUDI
              </p>
            </div>
  
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                92,913
              </h3>
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