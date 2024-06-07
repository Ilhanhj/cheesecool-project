@extends('layouts.main')

@section('container')
{{-- TEAM PAGE --}}

<div class="relative overflow-hidden  before:absolute before:top-0 before:start-1/2 before:bg-  before:bg-no-repeat before:bg-center before:size-full before:-z-[1] before:transform before:-translate-x-1/2">    
    <div class="py-10">
        <div class="container px-6 mx-auto md:px-12 xl:px-32">
          <div class="mb-16">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 dark:text-white md:text-4xl lg:text-5xl">
              <span class="font-bold text-center text-transparent from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text"> Epik Kreatifitas Duo           </span></h2>
            <p class="text-gray-600 dark:text-gray-300 lg:mx-auto lg:w-8/12 text-center">
              Dibuat oleh dua mahasiswa yang kreatif dan cerdas,  kami menggabungkan pemikiran kreatif  untuk menghasilkan fusion ide-ide luar biasa. 
            </p>
          </div>
          <div class="grid items-center gap-12 md:grid-cols-3">
            <div class="space-y-4 text-center">
              <img
                class="object-cover w-64 h-64 mx-auto rounded-xl md:h-64 md:w-48 lg:h-80 lg:w-64"
                src="images/team/ilhan-hero.png"
                alt="hero"
                loading="lazy"
                width="1000"
                height="667"
              />
              <div>
                <a href="https://ilhanhj-portfolio-v2.vercel.app/" class="">
                  <h4 class="text-2xl text-gray-700 dark:text-white">Ilhan Haffiyan Juldan</h4>
                </a>
                <span class="block text-sm text-gray-500">224060031</span>
                <span class="block text-sm text-gray-500">Teknik Informatika</span>              
            </div>
            </div>
            <div class="space-y-4 text-center">
              <img
                class="object-cover w-64 h-64 mx-auto rounded-xl md:h-40 md:w-40 lg:h-64 lg:w-64"
                src="images/team/ciskul.png"
                alt="logo"
                loading="lazy"
                width="1000"
                height="667"
              />
              <div>
              </div>
            </div>
            <div class="space-y-4 text-center">
                <img
                  class="object-cover w-64 h-64 mx-auto rounded-xl md:h-64 md:w-48 lg:h-80 lg:w-64"
                  src="images/team/iqbal-hero.png"
                  alt="hero"
                  loading="lazy"
                  width="1000"
                  height="667"
                />
                <div>
                  <a href="https://baleehash.github.io/portfolio-website/" class="">
                    <h4 class="text-2xl text-gray-700 dark:text-white">Iqbal Maulana</h4>
                  </a>
                  <span class="block text-sm text-gray-500">224060030</span>
                  <span class="block text-sm text-gray-500">Teknik Informatika</span>
                </div>
              </div>
          </div>
        </div>
      </div>
                                          
  </div>



                                        
{{-- END TEAM PAGE --}} 
@endsection