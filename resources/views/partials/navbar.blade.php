<header class="z-50 flex flex-wrap w-full py-7 md:justify-start md:flex-nowrap">
    <nav class="relative flex flex-wrap items-center w-full px-4 mx-auto font-normal max-w-7xl md:grid md:grid-cols-12 basis-full md:px-6" aria-label="Global">
      <div class="md:col-span-3">
        <!-- Logo -->
        <a class="flex-none inline-block text-xl font-normal rounded-md focus:outline-none focus:opacity-80" href="/" aria-label="CCU" id="navbar-gsap">
          <img src="/images/logo.png" alt="" class="w-full">
        </a>
        <!-- End Logo -->
      </div>

      <!-- Button Group -->
      @auth
      <div class="flex items-center py-1 gap-x-2 ms-auto md:ps-6 md:order-3 md:col-span-3 z-[100]" >
        <div class="hs-dropdown relative inline-flex" >
          <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:ring-offset-gray-800">
            {{ auth()->user()->name }}
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
        
          <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60  shadow-md rounded-lg p-2 mt-2 bg-slate-900  after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default" >
            <a href="/dashboard" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-slate-800 focus:outline-none focus:bg-gray-100  hover:bg-slate-800 hover:text-neutral-300 focus:bg-neutral-700" href="#">
              Dashboard
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mx-1 mt-5">
              @csrf
              <button type="submit" class="flex w-full item-center justify-center px-4 py-3 text-sm font-medium text-black border rounded-md border-neutral-200 gap-x-2 hover:bg-neutral-100 disabled:opacity-50 disabled:pointer-events-none border-neutral-600 text-white hover:text-purple-600">Log Out</button>
            </form>

            </a>
          </div>
        </div>
        
        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-[45px] flex justify-center items-center text-sm font-normal rounded-md border border-neutral-200 text-black hover:bg-neutral-100 disabled:opacity-50 disabled:pointer-events-none text-white border-neutral-700 hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="flex-shrink-0 hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="flex-shrink-0 hidden hs-collapse-open:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      @else
      <div class="flex items-center py-1 gap-x-2 ms-auto md:ps-6 md:order-3 md:col-span-3">
        <a href="/login" id="navbar-gsap" class="" >
            <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-black border rounded-md border-neutral-200 gap-x-2 hover:bg-neutral-400 disabled:opacity-50 disabled:pointer-events-none border-neutral-600  text-white hover:text-white">
                LOGIN 
            </button>   
        </a>
        <a href="/register" id="navbar-gsap" class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:ring-offset-gray-800" href="#">
          REGISTER
        </a>

        <div class="md:hidden" id="navbar-gsap">
          <button type="button" class="hs-collapse-toggle size-[47px] flex justify-center items-center text-sm font-normal rounded-md border border-neutral-200 text-black hover:bg-neutral-100 disabled:opacity-50 disabled:pointer-events-none text-white border-neutral-700 hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="flex-shrink-0 hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="flex-shrink-0 hidden hs-collapse-open:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      @endauth


      <!-- End Button Group -->

      <!-- Collapse -->
      <div id="navbar-collapse-with-animation" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6">
        <div class="flex flex-col mt-5 gap-y-4 gap-x-0 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
          <div id="navbar-gsap">
            <a class="inline-block font-medium focus:text-white hover:text-neutral-600 text-neutral-400 hover:text-neutral-300" href="{{ route('index') }}#tentang" aria-current="page">TENTANG</a>
          </div>
          <div id="navbar-gsap">
            <a class="inline-block font-medium focus:text-white hover:text-neutral-600 text-neutral-400 hover:text-neutral-300" href="{{ route('index') }}#jurusan">JURUSAN</a>
          </div>
          <div id="navbar-gsap">
            <a class="inline-block font-medium focus:text-white hover:text-neutral-600 text-neutral-400 hover:text-neutral-300" href="/team">TIM</a>
          </div>
          <div id="navbar-gsap">
            <a class="inline-block font-medium focus:text-white hover:text-neutral-600 text-neutral-400 hover:text-neutral-300" href="{{ route('index') }}#contact">KONTAK</a>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>