  <!-- Breadcrumb -->
  <div class="sticky top-0 inset-x-0 z-20 border-y px-4 sm:px-6 md:px-8 lg:hidden bg-slate-900 border-neutral-700">
    <div class="flex justify-between items-center py-2">
      <!-- Breadcrumb -->
      <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 text-neutral-400">
          Application Layout
          <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate text-neutral-400" aria-current="page">
          Dashboard
        </li>
      </ol>
      <!-- End Breadcrumb -->
  
      <!-- Sidebar -->
      <button type="button" class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 border-neutral-700 text-neutral-400 hover:text-neutral-200" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13"/></svg>
        <span class="sr-only">Sidebar</span>
      </button>
      <!-- End Sidebar -->
    </div>
  </div>
  <!-- End Breadcrumb -->
  
  <!-- Sidebar -->
  <div id="application-sidebar" class="hs-overlay [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-slate-800 border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    bg-slate-900 border-neutral-700
   ">
    <div class="px-8 py-4">
      <!-- Logo -->
      <div class="flex justify-center">
        <a href="/dashboard" aria-label="logo" class="flex items-center">
            <img src="/images/logo-text.png" alt="" class="">
        </a>
      </div>
    
      <div class="mt-8 text-center">
        <img
          src="/images/me.png"
          alt=""
          class="m-auto h-10 w-10 rounded-full object-cover lg:h-28 lg:w-28"
        />
        <h5 class="mt-4 hidden text-xl font-semibold text-purple-600 lg:block text-purple-300">{{ auth()->user()->name }}</h5> 
        <h1 class="text-xs hidden text-purple-400 lg:block">{{ auth()->user()->email }}</h1>
      </div>
      <!-- End Logo -->
    </div>
  
  <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
    <ul class="space-y-1.5">
        <li>
          <a
          href="/dashboard"
          class="group flex items-center gap-2  rounded-md p-3 {{ Request::is('dashboard') ? 'bg-slate-950': '' }} {{ Request::is('dashboard') ? 'text-purple-600': 'text-white' }}"
        >
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            Dashboard
          </a>
        </li>  
        <li>
        <a
          href="/dashboard/mahasiswa"
          class="group flex items-center gap-2  rounded-md p-3 {{ Request::is('dashboard/mahasiswa*') ? 'bg-slate-950': '' }} {{ Request::is('dashboard/mahasiswa*') ? 'text-purple-600': 'text-white' }}"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 11C14.7614 11 17 13.2386 17 16V22H15V16C15 14.4023 13.7511 13.0963 12.1763 13.0051L12 13C10.4023 13 9.09634 14.2489 9.00509 15.8237L9 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5.5 14C5.77885 14 6.05009 14.0326 6.3101 14.0942C6.14202 14.594 6.03873 15.122 6.00896 15.6693L6 16L6.0007 16.0856C5.88757 16.0456 5.76821 16.0187 5.64446 16.0069L5.5 16C4.7203 16 4.07955 16.5949 4.00687 17.3555L4 17.5V22H2V17.5C2 15.567 3.567 14 5.5 14ZM18.5 14C20.433 14 22 15.567 22 17.5V22H20V17.5C20 16.7203 19.4051 16.0796 18.6445 16.0069L18.5 16C18.3248 16 18.1566 16.03 18.0003 16.0852L18 16C18 15.3343 17.8916 14.694 17.6915 14.0956C17.9499 14.0326 18.2211 14 18.5 14ZM5.5 8C6.88071 8 8 9.11929 8 10.5C8 11.8807 6.88071 13 5.5 13C4.11929 13 3 11.8807 3 10.5C3 9.11929 4.11929 8 5.5 8ZM18.5 8C19.8807 8 21 9.11929 21 10.5C21 11.8807 19.8807 13 18.5 13C17.1193 13 16 11.8807 16 10.5C16 9.11929 17.1193 8 18.5 8ZM5.5 10C5.22386 10 5 10.2239 5 10.5C5 10.7761 5.22386 11 5.5 11C5.77614 11 6 10.7761 6 10.5C6 10.2239 5.77614 10 5.5 10ZM18.5 10C18.2239 10 18 10.2239 18 10.5C18 10.7761 18.2239 11 18.5 11C18.7761 11 19 10.7761 19 10.5C19 10.2239 18.7761 10 18.5 10ZM12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6C8 3.79086 9.79086 2 12 2ZM12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4Z"></path></svg>
          Calon Mahasiswa
        </a></li>
    @can('admin')
      <li>
          <a
          href="/dashboard/jurusan"
          class="group flex items-center gap-2  rounded-md p-3 {{ Request::is('dashboard/jurusan*') ? 'bg-slate-950': '' }} {{ Request::is('dashboard/jurusan*') ? 'text-purple-600': 'text-white' }}"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 11.3333L0 9L12 2L24 9V17.5H22V10.1667L20 11.3333V18.0113L19.7774 18.2864C17.9457 20.5499 15.1418 22 12 22C8.85817 22 6.05429 20.5499 4.22263 18.2864L4 18.0113V11.3333ZM6 12.5V17.2917C7.46721 18.954 9.61112 20 12 20C14.3889 20 16.5328 18.954 18 17.2917V12.5L12 16L6 12.5ZM3.96927 9L12 13.6846L20.0307 9L12 4.31541L3.96927 9Z"></path></svg>
        Program Studi        
        </a>
      </li>
    @endcan


      </ul>
      <form action="{{ route('logout') }}" method="POST" class="mx-1 mt-16">
      @csrf
      <button type="submit" class="flex w-full item-center justify-center px-4 py-3 text-sm font-medium text-black border rounded-md border-neutral-200 gap-x-2 hover:bg-neutral-100 disabled:opacity-50 disabled:pointer-events-none border-neutral-600 hover:bg-slate-800/10 text-white hover:text-purple-600">Log Out</button>
    </form>
    </nav>
  </div>
  <!-- End Sidebar -->