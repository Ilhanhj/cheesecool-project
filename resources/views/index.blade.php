@extends('layouts.main')


<!-- ========== HERO ========== -->
<div class="relative overflow-hidden  before:absolute before:top-0 before:start-1/2 before:bg-glowBottom before:bg-no-repeat before:bg-center before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
<div class="relative overflow-hidden" >
  <div class="before:absolute before:top-0 before:start-1/2 before:bg-glowBottom before:bg-no-repeat before:bg-center before:size-full before:-z-[1] before:transform before:-translate-x-1/2" id="bg-gsap">
  @section('container')
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 lg:pt-20 lg:pb-40 py-20">
           <svg id="motionPath" viewBox="-20 0 557 190" class="absolute">
            <path id="path" fill="none" d="M8,102 C15,83 58,25 131,24 206,24 233,63 259,91 292,125 328,155 377,155 464,155 497,97 504,74"/> 
            <g class="astronaut">
              <path fill="#CCC" d="M25 127.7h.5v-16.1H4.1c.9 3.7 2.8 6.9 5.6 9.8 4.3 4.2 9.4 6.3 15.3 6.3m69.9 0h.1c5.9 0 11-2.1 15.2-6.3 2.9-2.9 4.7-6.1 5.6-9.8H94.4v16.1h.5M31.8 31.4c-4.3.9-8.1 2.9-11.4 6.2-4.5 4.5-6.7 9.9-6.7 16.2v13.6c3.3-2.1 7.1-3.2 11.3-3.2.9 0 1.7 0 2.6.1-1.5-3.9-2.3-8.2-2.3-12.7 0-7.6 2.2-14.3 6.5-20.2m74.5 36V53.8c0-6.3-2.2-11.7-6.7-16.2-3-3-6.5-5.1-10.4-6l-.2.8c3.9 5.6 5.8 12 5.8 19.2 0 4.2-.7 8.1-2 11.8l.1.8c.7-.1 1.4-.1 2.2-.1 4.1.1 7.8 1.2 11.2 3.3z"/>
              <path fill="#FFF" d="M59.9 17.1h-.1c-9.5 0-17.6 3.4-24.3 10.1-1.3 1.3-2.5 2.7-3.6 4.2-4.3 5.9-6.5 12.6-6.5 20.3 0 4.6.8 8.8 2.3 12.7.2.6.5 1.2.8 1.8 1.7 3.6 4 6.9 7.1 9.9 3.3 3.3 6.8 5.7 10.7 7.4.1 0 .2.1.2.1.8.3 1.6.7 2.5.9 3.4 1.1 7.1 1.7 11 1.7 9.5 0 17.7-3.4 24.4-10.1 3.6-3.6 6.2-7.5 7.9-11.8l.3-.9c1.3-3.6 1.9-7.6 1.9-11.7 0-7.2-1.9-13.5-5.7-19.1l-.2-.2s0-.1-.1-.1l-.1-.1-.1-.1-.1-.1c0-.1-.1-.1-.1-.2 0 0 0-.1-.1-.1-1.1-1.5-2.3-2.9-3.7-4.3-6.8-6.9-14.9-10.3-24.4-10.3m50.2 53.4c-1.2-1.2-2.5-2.3-3.9-3.1-3.3-2.1-7.1-3.2-11.3-3.2-.7 0-1.5 0-2.2.1h-.4l-.3-.1c-1.7 4.3-4.3 8.3-7.9 11.8-6.7 6.7-14.9 10.1-24.4 10.1-3.9 0-7.6-.6-11-1.7-.8-.3-1.7-.6-2.5-.9-.1 0-.2-.1-.2-.1-3.9-1.7-7.5-4.2-10.7-7.4-3-3-5.4-6.3-7.1-9.9-.3-.6-.5-1.2-.8-1.8-.8-.1-1.7-.1-2.6-.1-4.2 0-8 1.1-11.3 3.2-1.4.9-2.7 1.9-3.9 3.1-4.2 4.2-6.3 9.2-6.3 15.2v20.6c0 1.9.2 3.7.6 5.4h21.4V89.1 145c.6 3.3 2.2 6.2 4.7 8.7 3.3 3.4 7.3 5 12 5s8.9-1.8 12.7-5.3c2.8-2.6 4.5-5.5 5-8.7v-15.9H47h26-13v15.9c.5 3.2 2.2 6.1 5 8.7 3.8 3.5 8 5.3 12.7 5.3 4.7 0 8.7-1.7 12-5 2.5-2.5 4-5.4 4.7-8.7V89v22.6h21.4c.4-1.7.6-3.5.6-5.4V85.6c0-5.8-2.1-10.9-6.3-15.1M60 118.1V88v30.1z"/>
              <path fill="#2D2D2D" d="M59.7 2.5c-1.1 0-2 .4-2.7 1.1-.7.7-1.1 1.6-1.1 2.7s.4 2 1.1 2.7c.7.7 1.6 1.1 2.7 1.1s2-.4 2.7-1.1c.7-.7 1.1-1.6 1.1-2.7s-.4-2-1.1-2.7c-.7-.8-1.6-1.1-2.7-1.1z"/>
              <path fill="none" stroke="#2D2D2D" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M115.8 111.6c.4-1.7.6-3.5.6-5.4V85.6c0-5.9-2.1-11-6.3-15.2-1.2-1.2-2.5-2.3-3.9-3.1-3.3-2.1-7.1-3.2-11.3-3.2h0c-.7 0-1.5 0-2.2.1h-.4m-.2.1c-1.7 4.3-4.3 8.3-7.9 11.8-6.7 6.7-14.9 10.1-24.4 10.1-3.9 0-7.6-.6-11-1.7-.8-.3-1.7-.6-2.5-.9-.1 0-.2-.1-.2-.1-3.9-1.7-7.5-4.2-10.7-7.4-3-3-5.4-6.3-7.1-9.9-.3-.6-.5-1.2-.8-1.8-.8-.1-1.7-.1-2.6-.1h0c-4.2 0-8 1.1-11.3 3.2-1.4.9-2.7 1.9-3.9 3.1-4.2 4.2-6.3 9.2-6.3 15.2v20.6c0 1.9.2 3.7.6 5.4h21.4V89.2m80.9-21.8V53.8c0-6.3-2.2-11.7-6.7-16.2-3-3-6.5-5.1-10.4-6m-.3.8c3.9 5.6 5.8 12 5.8 19.2 0 4.2-.7 8.1-2 11.8m-33-53.3c-1.1 0-2-.4-2.7-1.1-.7-.7-1.1-1.6-1.1-2.7s.4-2 1.1-2.7c.7-.7 1.6-1.1 2.7-1.1s2 .4 2.7 1.1c.7.7 1.1 1.6 1.1 2.7s-.4 2-1.1 2.7c-.7.7-1.6 1.1-2.7 1.1v7.1h.1c9.5 0 17.7 3.4 24.4 10.1 1.4 1.4 2.6 2.8 3.7 4.3 0 0 0 .1.1.1 0 .1.1.1.1.2l.1.1s0 0 0 0l.1.1s0 0 0 0 0 0 0 0l.1.1h0l.1.1.2.2c3.8 5.6 5.7 12 5.7 19.1 0 4.2-.6 8.1-1.9 11.7l-.3.9m-3-32.6h0c-.1 0-.1 0 0 0-.1 0-.1 0 0 0-.3-.1-.6-.1-.8-.2h-.2s0 .1.1.1v.1c.1.1.2.3.3.4 0 0 0 0 0 0h0c.1.1.2.3.3.4 0 0 0 0 0 0m-57.1-1c1.1-1.4 2.3-2.8 3.6-4.2 6.7-6.7 14.8-10.1 24.3-10.1m-46 50.3V53.8c0-6.3 2.2-11.7 6.7-16.2 3.3-3.3 7.1-5.4 11.4-6.2-4.3 5.9-6.5 12.6-6.5 20.3 0 4.6.8 8.8 2.3 12.7m65.1-.9s0 0 0 0h0v.2l-.2.5c0 .1-.1.1-.1.2m2.3 63.3h.3c5.9 0 11-2.1 15.2-6.3 2.9-2.9 4.7-6.1 5.6-9.8H94.4v16.1h.2m0 0h0m-47.3 1.1H73m-13 16c.5 3.2 2.2 6.1 5 8.7 3.8 3.5 8 5.3 12.7 5.3 4.7 0 8.7-1.7 12-5 2.5-2.5 4-5.4 4.7-8.7v-17.3m-68.8-.1V145c.6 3.3 2.2 6.2 4.7 8.7 3.3 3.4 7.3 5 12 5s8.9-1.8 12.7-5.3c2.8-2.6 4.5-5.5 5-8.7v-15.9m-34.4-1.1s0 0 0 0h-.3s0 0 0 0H25c-5.9 0-11-2.1-15.2-6.3-2.9-2.9-4.7-6.1-5.6-9.8m21.4 0v16.1m68.8-38.6v22.6M60 118.1V88"/>
              <path fill="#7592A0" d="M84.5 68.6c6.8-4.3 10.2-9.5 10.2-15.5 0-5.1-2.4-9.6-7.2-13.4H32c-4.8 3.8-7.3 8.3-7.3 13.4 0 6.1 3.4 11.2 10.2 15.5C41.7 72.9 50 75 59.6 75c9.8 0 18-2.1 24.9-6.4z"/>
              <path fill="none" stroke="#2D2D2D" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M94.7 53.1c0 6.1-3.4 11.2-10.2 15.5-6.8 4.3-15.1 6.4-24.7 6.4-9.7 0-17.9-2.1-24.7-6.4-6.8-4.3-10.2-9.5-10.2-15.5 0-5.1 2.4-9.6 7.3-13.4h55.5c4.6 3.8 7 8.3 7 13.4z"/>
              <path fill="none" stroke="#E6E6E6" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M83.5 47.6c2.4 3.5 2.4 7.8 0 12.7M35.8 47.6c-2.4 3.5-2.4 7.8 0 12.7"/>
              <path fill="#581c87" stroke="#EF3D43" stroke-miterlimit="10" stroke-width="1.439" d="M70.9 95.9c0-4.807 3.893-8.7 8.7-8.7 4.807 0 8.7 3.893 8.7 8.7 0 4.807-3.893 8.7-8.7 8.7a8.698 8.698 0 0 1-8.7-8.7z"/>
              <path fill="#FFF" d="M79.6 101.7c-1.7 0-2.8-.9-2.6-1.9.5-2.6.9-5.2 1.4-7.8.2-1 .4-2.8 1.2-2.8.8 0 1 1.8 1.2 2.8.5 2.6.9 5.2 1.4 7.8.3 1-.9 1.8-2.6 1.9z"/>
              <path fill="#FFF" d="M76.4 101.2c-.4 0-.8-.3-.8-.8v-3.3c0-.4.3-.8.8-.8.4 0 .8.3.8.8v3.3c0 .5-.3.8-.8.8zm6.4 0c-.4 0-.7-.3-.7-.7v-3.3c0-.4.3-.7.7-.7.4 0 .7.3.7.7v3.3c.1.4-.3.7-.7.7z"/>
              <g fill="#FFF">
                <path d="M73.3 95.3a.7.7 0 1 1 1.4 0 .7.7 0 0 1-1.4 0z"/>
                <path d="M73.9 95.3c0-.663.045-1.2.1-1.2.055 0 .1.537.1 1.2 0 .663-.045 1.2-.1 1.2-.055 0-.1-.537-.1-1.2z"/>
                <path d="M72.7 95.3c0-.055.582-.1 1.3-.1.718 0 1.3.045 1.3.1 0 .055-.582.1-1.3.1-.718 0-1.3-.045-1.3-.1z"/>
              </g>
              <g fill="#FFF">
                <path d="M84.1 93.4a.7.7 0 1 1 1.4 0 .7.7 0 0 1-1.4 0z"/>
                <path d="M84.7 93.4c0-.663.045-1.2.1-1.2.055 0 .1.537.1 1.2 0 .663-.045 1.2-.1 1.2-.055 0-.1-.537-.1-1.2z"/>
                <path d="M83.5 93.4c0-.055.582-.1 1.3-.1.718 0 1.3.045 1.3.1 0 .055-.582.1-1.3.1-.718 0-1.3-.045-1.3-.1z"/>
              </g>
            </g>
          </svg> 
          <!-- Title -->
          <div class="max-w-5xl mx-auto mt-5 leading-8 text-center">
            <h1 class="block text-3xl font-bold text-white md:text-5xl lg:text-6xl" id="hero-text">
              Selamat datang di Universitas
            </h1>
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-center text-transparent mt-2 from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text" id="hero-text">Terbaik di Indonesia</span>
          </div>
          <!-- End Title -->
      
          <div class="max-w-xl mx-auto mt-5 text-center">
            <p class="text-sm lg:text-lg text-gray-600 dark:text-neutral-400" id="hero-text">Menyiapkan Generasi Pemimpin Masa Depan dengan Pendidikan Berkualitas</p>
          </div>
      
          <!-- Buttons -->
          <div class="flex justify-center gap-3 mt-8" id="hero-text">
            <a class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white border border-transparent rounded-full gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 dark:focus:ring-offset-gray-800" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(255,255,255,1)"><path fill="none" d="M0 0h24v24H0z"></path><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM12.1779 7.17624C11.8055 7.06167 11.41 7 11 7C8.79086 7 7 8.79086 7 11C7 13.2091 8.79086 15 11 15C13.2091 15 15 13.2091 15 11C15 10.59 14.9383 10.1945 14.8238 9.82212C14.5102 10.5166 13.8115 11 13 11C11.8954 11 11 10.1046 11 9C11 8.18846 11.4834 7.48982 12.1779 7.17624Z"></path></svg>
              Jelajahi Sekarang
            </a>
          </div>
          <!-- End Buttons -->
        </div>
      </div>
      </div>
    <!-- ========== END HERO ========== -->
    
    <!-- ========== PARTNERS ========== -->
<div class="relative overflow-hidden  lg:py-6 bg-oldNavy ">
  <div class="relative z-10 ">
    <div class="max-w-5xl px-4 xl:px-0 mx-auto">

      <div class="flex justify-between gap-6 " >
        <svg class="py-2 lg:py-5 w-5  md:w-5 lg:w-7 fill-current text-neutral-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Microsoft</title><path d="M0 0v11.408h11.408V0zm12.594 0v11.408H24V0zM0 12.594V24h11.408V12.594zm12.594 0V24H24V12.594z"/></svg>

        <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-400" xmlns="http://www.w3.org/2000/svg" viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500" height="607"><path d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z" fill="currentColor"/></svg>

        <svg class="py-2 lg:py-2 w-8  md:w-5 lg:w-16 fill-current text-neutral-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>IBM</title><path d="M23.544 15.993c.038 0 .06-.017.06-.053v-.036c0-.035-.022-.052-.06-.052h-.09v.14zm-.09.262h-.121v-.498h.225c.112 0 .169.066.169.157 0 .079-.036.129-.09.15l.111.19h-.133l-.092-.17h-.07zm.434-.222v-.062c0-.2-.157-.357-.363-.357a.355.355 0 00-.363.357v.062c0 .2.156.358.363.358a.355.355 0 00.363-.358zm-.838-.03c0-.28.212-.492.475-.492.264 0 .475.213.475.491 0 .279-.211.491-.475.491a.477.477 0 01-.475-.49zM16.21 8.13l-.216-.624h-3.56v.624zm.413 1.19l-.216-.623h-3.973v.624zm2.65 7.147h3.107v-.624h-3.108zm0-1.192h3.107v-.623h-3.108zm0-1.19h1.864v-.624h-1.865zm0-1.191h1.864v-.624h-1.865zm0-1.191h1.864v-.624h-3.555l-.175.504-.175-.504h-3.555v.624h1.865v-.574l.2.574h3.33l.2-.574zm1.864-1.815h-3.142l-.217.624h3.359zm-7.46 3.006h1.865v-.624h-1.865zm0 1.19h1.865v-.623h-1.865zm-1.243 1.191h3.108v-.623h-3.108zm0 1.192h3.108v-.624h-3.108zm6.386-8.961l-.216.624h3.776v-.624zm-.629 1.815h4.19v-.624h-3.974zm-4.514 1.19h3.359l-.216-.623h-3.143zm2.482 2.383h2.496l.218-.624h-2.932zm.417 1.19h1.662l.218-.623h-2.098zm.416 1.191h.83l.218-.623h-1.266zm.414 1.192l.217-.624h-.432zm-12.433-.006l4.578.006c.622 0 1.18-.237 1.602-.624h-6.18zm4.86-3v.624h2.092c0-.216-.03-.425-.083-.624zm-3.616.624h1.865v-.624H6.217zm3.617-3.573h2.008c.053-.199.083-.408.083-.624H9.834zm-3.617 0h1.865v-.624H6.217zM9.55 7.507H4.973v.624h6.18a2.36 2.36 0 00-1.602-.624zm2.056 1.191H4.973v.624h6.884a2.382 2.382 0 00-.25-.624zm-5.39 2.382v.624h4.87c.207-.176.382-.387.519-.624zm4.87 1.191h-4.87v.624h5.389a2.39 2.39 0 00-.519-.624zm-6.114 3.006h6.634c.11-.193.196-.402.25-.624H4.973zM0 8.13h4.352v-.624H0zm0 1.191h4.352v-.624H0zm1.243 1.191h1.865v-.624H1.243zm0 1.191h1.865v-.624H1.243zm0 1.19h1.865v-.623H1.243zm0 1.192h1.865v-.624H1.243zM0 15.276h4.352v-.623H0zm0 1.192h4.352v-.624H0Z"/></svg>

        <svg class="py-2 lg:py-2 w-8  md:w-5 lg:w-16 fill-current text-neutral-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Intel</title><path d="M20.42 7.345v9.18h1.651v-9.18zM0 7.475v1.737h1.737V7.474zm9.78.352v6.053c0 .513.044.945.13 1.292.087.34.235.618.44.828.203.21.475.359.803.451.334.093.754.136 1.255.136h.216v-1.533c-.24 0-.445-.012-.593-.037a.672.672 0 0 1-.39-.173.693.693 0 0 1-.173-.377 4.002 4.002 0 0 1-.037-.606v-2.182h1.193v-1.416h-1.193V7.827zm-3.505 2.312c-.396 0-.76.08-1.082.241-.327.161-.6.384-.822.668l-.087.117v-.902H2.658v6.256h1.639v-3.214c.018-.588.16-1.02.433-1.299.29-.297.642-.445 1.044-.445.476 0 .841.149 1.082.433.235.284.359.686.359 1.2v3.324h1.663V12.97c.006-.89-.229-1.595-.686-2.09-.458-.495-1.1-.742-1.917-.742zm10.065.006a3.252 3.252 0 0 0-2.306.946c-.29.29-.525.637-.692 1.033a3.145 3.145 0 0 0-.254 1.273c0 .452.08.878.241 1.274.161.395.39.742.674 1.032.284.29.637.526 1.045.693.408.173.86.26 1.342.26 1.397 0 2.262-.637 2.782-1.23l-1.187-.904c-.248.297-.841.699-1.583.699-.464 0-.847-.105-1.138-.321a1.588 1.588 0 0 1-.593-.872l-.019-.056h4.915v-.587c0-.451-.08-.872-.235-1.267a3.393 3.393 0 0 0-.661-1.033 3.013 3.013 0 0 0-1.02-.692 3.345 3.345 0 0 0-1.311-.248zm-16.297.118v6.256h1.651v-6.256zm16.278 1.286c1.132 0 1.664.797 1.664 1.255l-3.32.006c0-.458.525-1.255 1.656-1.261zm7.073 3.814a.606.606 0 0 0-.606.606.606.606 0 0 0 .606.606.606.606 0 0 0 .606-.606.606.606 0 0 0-.606-.606zm-.008.105a.5.5 0 0 1 .002 0 .5.5 0 0 1 .5.501.5.5 0 0 1-.5.5.5.5 0 0 1-.5-.5.5.5 0 0 1 .498-.5zm-.233.155v.699h.13v-.285h.093l.173.285h.136l-.18-.297a.191.191 0 0 0 .118-.056c.03-.03.05-.074.05-.136 0-.068-.02-.117-.063-.154-.037-.038-.105-.056-.185-.056zm.13.099h.154c.019 0 .037.006.056.012a.064.064 0 0 1 .037.031c.013.013.012.031.012.056a.124.124 0 0 1-.012.055.164.164 0 0 1-.037.031c-.019.006-.037.013-.056.013h-.154Z"/></svg>

        <svg class="py-2 lg:py-2 w-7  md:w-5 lg:w-10 fill-current text-neutral-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Meta</title><path d="M6.915 4.03c-1.968 0-3.683 1.28-4.871 3.113C.704 9.208 0 11.883 0 14.449c0 .706.07 1.369.21 1.973a6.624 6.624 0 0 0 .265.86 5.297 5.297 0 0 0 .371.761c.696 1.159 1.818 1.927 3.593 1.927 1.497 0 2.633-.671 3.965-2.444.76-1.012 1.144-1.626 2.663-4.32l.756-1.339.186-.325c.061.1.121.196.183.3l2.152 3.595c.724 1.21 1.665 2.556 2.47 3.314 1.046.987 1.992 1.22 3.06 1.22 1.075 0 1.876-.355 2.455-.843a3.743 3.743 0 0 0 .81-.973c.542-.939.861-2.127.861-3.745 0-2.72-.681-5.357-2.084-7.45-1.282-1.912-2.957-2.93-4.716-2.93-1.047 0-2.088.467-3.053 1.308-.652.57-1.257 1.29-1.82 2.05-.69-.875-1.335-1.547-1.958-2.056-1.182-.966-2.315-1.303-3.454-1.303zm10.16 2.053c1.147 0 2.188.758 2.992 1.999 1.132 1.748 1.647 4.195 1.647 6.4 0 1.548-.368 2.9-1.839 2.9-.58 0-1.027-.23-1.664-1.004-.496-.601-1.343-1.878-2.832-4.358l-.617-1.028a44.908 44.908 0 0 0-1.255-1.98c.07-.109.141-.224.211-.327 1.12-1.667 2.118-2.602 3.358-2.602zm-10.201.553c1.265 0 2.058.791 2.675 1.446.307.327.737.871 1.234 1.579l-1.02 1.566c-.757 1.163-1.882 3.017-2.837 4.338-1.191 1.649-1.81 1.817-2.486 1.817-.524 0-1.038-.237-1.383-.794-.263-.426-.464-1.13-.464-2.046 0-2.221.63-4.535 1.66-6.088.454-.687.964-1.226 1.533-1.533a2.264 2.264 0 0 1 1.088-.285z"/></svg>
      </div>
    </div>
  </div>
</div>
    <!-- ========== END PARTNERS ========== -->

    <!-- ========== ABOUT ========== -->
<div class="relative overflow-hidden before:absolute before:-top-60 lg:before:top-0 before:start-1/2 before:bg-glowTop before:bg-no-repeat before:bg-opacity-10 before:bg-top before:size-full before:-z-[1] before:transform before:-translate-x-1/2" id="tentang" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-14 mx-auto">
    <div class="relative p-6 md:p-16" >
    <!-- Grid -->
      <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200">
        <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
    <!-- Start Title -->
    <div class="max-w-5xl mx-auto mt-5 leading-8  text-center lg:text-start">
      <h1 class="block text-2xl font-bold md:text-3xl lg:text-4xl ">
      <span class="font-semibold bg-gradient-to-r from-white to-purple-400 bg-clip-text text-transparent  text-center lg:text-start pt-20 ">Tentang Cheesecool University </span>
      </h1>
    </div>
    <!-- End Title -->

        <!-- Tab Navs -->
        <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist"data-aos="fade-up" data-aos-delay="200">


          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-md dark:hs-tab-active:bg-slate-900 dark:hover:bg-slate-800 dark:hs-tab-active:shadow-lg active" id="tabs-with-card-item-1 " data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab" data-aos="zoom-in-down" data-aos-delay="600">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M4 11.3333L0 9L12 2L24 9V17.5H22V10.1667L20 11.3333V18.0113L19.7774 18.2864C17.9457 20.5499 15.1418 22 12 22C8.85817 22 6.05429 20.5499 4.22263 18.2864L4 18.0113V11.3333ZM6 12.5V17.2917C7.46721 18.954 9.61112 20 12 20C14.3889 20 16.5328 18.954 18 17.2917V12.5L12 16L6 12.5ZM3.96927 9L12 13.6846L20.0307 9L12 4.31541L3.96927 9Z"></path></svg>
              <span class="grow ms-6">
                <span class="block text-md lg:text-lg font-semibold hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200">Kerja dan Magang Internasional</span>
                <span class="block mt-1 text-md lg:text-lg text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Peluang magang di luar negeri, pertukaran pelajar, dan proyek kolaboratif dengan universitas global.</span>
              </span>
            </span>
          </button>

          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-md dark:hs-tab-active:bg-slate-900 dark:hover:bg-slate-800 dark:hs-tab-active:shadow-lg" id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 1L13.001 4.06201C16.6192 4.51365 19.4869 7.38163 19.9381 11L23 11V13L19.938 13.001C19.4864 16.6189 16.6189 19.4864 13.001 19.938L13 23H11L11 19.9381C7.38163 19.4869 4.51365 16.6192 4.06201 13.001L1 13V11L4.06189 11C4.51312 7.38129 7.38129 4.51312 11 4.06189L11 1H13ZM12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6ZM12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10Z"></path></svg>
              <span class="grow ms-6">
                <span class="block text-md lg:text-lg font-semibold hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200">Fokus pada Inovasi dan Teknologi
                </span>
                <span class="block mt-1 text-md lg:text-lg text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Belajar dari para ahli dan akses ke fasilitas penelitian mutakhir di bidang teknologi informasi.</span>
              </span>
            </span>
          </button>

          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-md dark:hs-tab-active:bg-slate-900 dark:hover:bg-slate-800 dark:hs-tab-active:shadow-lg" id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6.23509 6.45329C4.85101 7.89148 4 9.84636 4 12C4 16.4183 7.58172 20 12 20C13.0808 20 14.1116 19.7857 15.0521 19.3972C15.1671 18.6467 14.9148 17.9266 14.8116 17.6746C14.582 17.115 13.8241 16.1582 12.5589 14.8308C12.2212 14.4758 12.2429 14.2035 12.3636 13.3943L12.3775 13.3029C12.4595 12.7486 12.5971 12.4209 14.4622 12.1248C15.4097 11.9746 15.6589 12.3533 16.0043 12.8777C16.0425 12.9358 16.0807 12.9928 16.1198 13.0499C16.4479 13.5297 16.691 13.6394 17.0582 13.8064C17.2227 13.881 17.428 13.9751 17.7031 14.1314C18.3551 14.504 18.3551 14.9247 18.3551 15.8472V15.9518C18.3551 16.3434 18.3168 16.6872 18.2566 16.9859C19.3478 15.6185 20 13.8854 20 12C20 8.70089 18.003 5.8682 15.1519 4.64482C14.5987 5.01813 13.8398 5.54726 13.575 5.91C13.4396 6.09538 13.2482 7.04166 12.6257 7.11976C12.4626 7.14023 12.2438 7.12589 12.012 7.11097C11.3905 7.07058 10.5402 7.01606 10.268 7.75495C10.0952 8.2232 10.0648 9.49445 10.6239 10.1543C10.7134 10.2597 10.7307 10.4547 10.6699 10.6735C10.59 10.9608 10.4286 11.1356 10.3783 11.1717C10.2819 11.1163 10.0896 10.8931 9.95938 10.7412C9.64554 10.3765 9.25405 9.92233 8.74797 9.78176C8.56395 9.73083 8.36166 9.68867 8.16548 9.64736C7.6164 9.53227 6.99443 9.40134 6.84992 9.09302C6.74442 8.8672 6.74488 8.55621 6.74529 8.22764C6.74529 7.8112 6.74529 7.34029 6.54129 6.88256C6.46246 6.70541 6.35689 6.56446 6.23509 6.45329ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z"></path></svg>
              <span class="grow ms-6">
                <span class="block text-md lg:text-lg font-semibold hs-tab-active:text-purple-600 text-gray-800 dark:hs-tab-active:text-purple-500 dark:text-neutral-200">Studi Pertukaran Budaya Global</span>
                <span class="block mt-1 text-md lg:text-lg text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Temukan kekayaan budaya dunia di universitas mitra di berbagai negara.</span>
              </span>
            </span>
          </button>
        </nav>
        <!-- End Tab Navs -->
      </div>
      <!-- End Col -->

      <div class="lg:col-span-6 lg:pt-40">
        <div class="relative">
          <!-- Tab Content -->
          <div>
            <div id="tabs-with-card-1"  role="tabpanel" aria-labelledby="tabs-with-card-item-1">
              <img class=" lg:w-[80%] rounded-md " src="images/about/about-1.png" alt="Image Description" id="about-gsap">
            </div>

            <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
              <img class=" lg:w-[80%] rounded-md " src="images/about/about-2.png" alt="Image Description" id="about-gsap">
            </div>

            <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
              <img class=" lg:w-[80%] rounded-md " src="images/about/about-3.png" alt="Image Description" id="about-gsap">
            </div>
          </div>
          <!-- End Tab Content -->

        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <!-- Background Color -->
    <div class="absolute inset-0 grid grid-cols-12 size-full">
      <div class="col-span-full lg:col-span-7 lg:col-start-6  w-full h-5/6 rounded-md sm:h-3/4 lg:h-full "></div>
    </div>
    <!-- End Background Color -->
  </div>
</div>
</div>
    <!-- ========== END ABOUT ========== -->

    <!-- ========== JURUSAN ========== -->
<div class="relative overflow-hidden before:absolute before:-top-5 lg:before:top-0 before:start-1/2 before:bg-glowRect before:bg-no-repeat before:bg-bottom before:size-full before:-z-[1] before:transform before:-translate-x-1/2 lg:py-10" id="jurusan" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
    <!-- Start Title -->
      <div class="max-w-xl mx-auto mt-5 leading-8 text-center " data-aos="fade-up" data-aos-duration="1500">
        <h1 class="block text-2xl font-bold text-white md:text-4xl lg:text-5xl ">
        <span class="font-semibold text-center text-transparent from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text pt-20">Program Studi</span>
        </h1>
      </div>
      <!-- End Title -->
      <div class="w-full px-4 mt-5 text-center lg:pb-20" data-aos="fade-up" data-aos-delay="200">
        <p class="text-md lg:text-lg text-gray-600 dark:text-neutral-400"> Berbagai program studi unggulan dengan kurikulum yang terbaik.</p>
      </div>
    <!-- Icon Blocks -->
  <div class="max-w-[85rem] px-10 py-10 sm:px-6 lg:px-32 lg:py-14 mx-auto">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center justify-center lg:justify-center  gap-12">
    <!-- Icon Block --> 
    <div class="" data-aos="zoom-in" data-aos-delay="400">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl" >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600 lg:text-start text-start">Teknik Informatika</h3>
        <p class="mt-1 text-gray-600 lg:text-start text-start">Pelajari ilmu komputer dengan pendekatan teknologi yang praktis dan inovatif.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="" data-aos="zoom-in-up" data-aos-delay="600">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl" >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM15 7H9V19H15V7ZM7 7H4V19H7V7ZM17 7V19H20V7H17ZM9 3V5H15V3H9Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600">Bisnis Internasional</h3>
        <p class="mt-1 text-gray-600">Kembangkan keterampilan bisnis global untuk karir yang sukses di pasar global.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class=""data-aos="zoom-in-down" data-aos-delay="500">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl"  >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M15.4565 9.67503L15.3144 9.53297C14.6661 8.90796 13.8549 8.43369 12.9235 8.18412C10.0168 7.40527 7.22541 9.05273 6.43185 12.0143C6.38901 12.1742 6.36574 12.3537 6.3285 12.8051C6.17423 14.6752 5.73449 16.0697 4.5286 17.4842C6.78847 18.3727 9.46572 18.9986 11.5016 18.9986C13.9702 18.9986 16.1644 17.3394 16.8126 14.9202C17.3306 12.9869 16.7513 11.0181 15.4565 9.67503ZM13.2886 6.21301L18.2278 2.37142C18.6259 2.0618 19.1922 2.09706 19.5488 2.45367L22.543 5.44787C22.8997 5.80448 22.9349 6.37082 22.6253 6.76891L18.7847 11.7068C19.0778 12.8951 19.0836 14.1721 18.7444 15.4379C17.8463 18.7897 14.8142 20.9986 11.5016 20.9986C8 20.9986 3.5 19.4967 1 17.9967C4.97978 14.9967 4.04722 13.1865 4.5 11.4967C5.55843 7.54658 9.34224 5.23935 13.2886 6.21301ZM16.7015 8.09161C16.7673 8.15506 16.8319 8.21964 16.8952 8.28533L18.0297 9.41984L20.5046 6.23786L18.7589 4.4921L15.5769 6.96698L16.7015 8.09161Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600">Desain Grafis</h3>
        <p class="mt-1 text-gray-600">Asah kreativitas bidang desain visual dan komunikasi dengan teknologi terkini.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="" data-aos="zoom-in" data-aos-delay="400">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl" >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600">Teknik Sipil</h3>
        <p class="mt-1 text-gray-600">Dapatkan pengetahuan mendalam tentang desain dan konstruksi pembangunan.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->
    <!-- Icon Block -->
    <div class="" data-aos="zoom-in-up" data-aos-delay="600">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl" >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg  class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M16.9337 8.96494C16.426 5.03562 13.0675 2 9 2 4.58172 2 1 5.58172 1 10 1 11.8924 1.65707 13.6313 2.7555 15.0011 3.56351 16.0087 4.00033 17.1252 4.00025 18.3061L4 22H13L13.001 19H15C16.1046 19 17 18.1046 17 17V14.071L18.9593 13.2317C19.3025 13.0847 19.3324 12.7367 19.1842 12.5037L16.9337 8.96494ZM3 10C3 6.68629 5.68629 4 9 4 12.0243 4 14.5665 6.25141 14.9501 9.22118L15.0072 9.66262 16.5497 12.0881 15 12.7519V17H11.0017L11.0007 20H6.00013L6.00025 18.3063C6.00036 16.6672 5.40965 15.114 4.31578 13.7499 3.46818 12.6929 3 11.3849 3 10ZM21.1535 18.1024 19.4893 16.9929C20.4436 15.5642 21 13.8471 21 12.0001 21 10.153 20.4436 8.4359 19.4893 7.00722L21.1535 5.89771C22.32 7.64386 23 9.74254 23 12.0001 23 14.2576 22.32 16.3562 21.1535 18.1024Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600">Ilmu Komunikasi</h3>
        <p class="mt-1 text-gray-600">Pelajari strategi komunikasi yang efektif untuk berbagai media dan industri.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="" data-aos="zoom-in-down" data-aos-delay="500">
    <div class="relative p-5 bg-slate-900 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl" >
      <div class="relative flex justify-center lg:justify-center items-center size-12 lg:size-12 bg-oldNavy rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-purple-600 before:rounded-xl">
        <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 9H21L11 24V15H4L13 0V9ZM11 11V7.22063L7.53238 13H13V17.3944L17.263 11H11Z"></path></svg>
      </div>
      <div class="mt-5">
        <h3 class="text-lg font-semibold text-purple-600">Teknik Elektro</h3>
        <p class="mt-1 text-gray-600">Eksplorasi dunia listrik dan elektronik pengembangan dan aplikasi teknologi elektro.</p>
      </div>
    </div>
  </div>
    <!-- End Icon Block -->

  </div>
</div>
    </div>
    <!-- ========== END JURUSAN ========== -->

    <!-- ========== WHY US ========== -->
  <div class="relative overflow-hidden before:absolute before:start-1/2  before:size-full before:-z-[1] before:transform before:-translate-x-1/2 px-10  lg:py-5" data-aos="fade-up" id="particles-js">
    <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:px-8" id="whyus">
        <div class="mb-10 lg:mb-16 flex justify-center items-center flex-col gap-x-0 gap-y-6 lg:flex-col lg:gap-y-6 max-md:max-w-lg max-md:mx-auto">
            <div class="relative w-full text-center lg:text-left lg:w-full">
              <h1 class="block text-2xl font-bold text-white md:text-2xl lg:text-3xl " data-aos="fade-up">
                <span class="font-semibold text-center text-transparent from-purple-600 via-pink-600 to-purple-600 bg-gradient-to-r bg-clip-text pt-20">Mengapa Cheesecool University ?</span>
                </h1>
            </div>
            <div class="w-full  text-center lg:text-left"  data-aos="fade-right" data-aos-delay="500">
              <p class="text-md lg:text-lg text-gray-600 dark:text-neutral-400">Universitas Cheesecool dikenal dengan pendidikan unggul, dosen berpengalaman, dan fasilitas modern. Kurikulum  relevan dengan industri, memastikan lulusan siap bersaing di pasar kerja.</p>
            </div>
        </div>
        <div class="flex justify-center items-center gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
            <!-- Kurikulum Up-To-Date -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600"  data-aos="flip-left" data-aos-delay="500">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                        <path d="M12 4C14.7486 4 17.1749 5.38626 18.6156 7.5H16V9.5H22V3.5H20V5.99936C18.1762 3.57166 15.2724 2 12 2C6.47715 2 2 6.47715 2 12H4C4 7.58172 7.58172 4 12 4ZM20 12C20 16.4183 16.4183 20 12 20C9.25144 20 6.82508 18.6137 5.38443 16.5H8V14.5H2V20.5H4V18.0006C5.82381 20.4283 8.72764 22 12 22C17.5228 22 22 17.5228 22 12H20Z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Kurikulum Up-To-Date</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Mata kuliah kami selalu mengikuti perkembangan industri, memastikan keterampilan lulusan tetap relevan.</p>
            </div>
            <!-- Dosen Berpengalaman -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600"  data-aos="flip-left" data-aos-delay="600">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                        <path d="M17 13C19.2091 13 21 14.7909 21 17C21 19.2091 19.2091 21 17 21C14.7909 21 13 19.2091 13 17H11C11 19.2091 9.20914 21 7 21C4.79086 21 3 19.2091 3 17C3 14.7909 4.79086 13 7 13C8.48052 13 9.77317 13.8043 10.4648 14.9999H13.5352C14.2268 13.8043 15.5195 13 17 13ZM7 15C5.89543 15 5 15.8954 5 17C5 18.1046 5.89543 19 7 19C8.10457 19 9 18.1046 9 17C9 15.8954 8.10457 15 7 15ZM17 15C15.8954 15 15 15.8954 15 17C15 18.1046 15.8954 19 17 19C18.1046 19 19 18.1046 19 17C19 15.8954 18.1046 15 17 15ZM16 3C18.2091 3 20 4.79086 20 7V10H22V12H2V10H4V7C4 4.79086 5.79086 3 8 3H16ZM16 5H8C6.94564 5 6 5.95 6 7V10H18V7C18 5.94564 17.05 5 16 5Z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Dosen Berpengalaman</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Pengajaran oleh dosen ahli berpengalaman, memberikan bimbingan berkualitas tinggi dan wawasan praktis.</p>
            </div>
                <!-- Fasilitas Canggih -->
                <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600" data-aos="flip-left" data-aos-delay="700">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                        <path d="M13.5 2C13.5 2.44425 13.3069 2.84339 13 3.11805V5H18C19.6569 5 21 6.34315 21 8V18C21 19.6569 19.6569 21 18 21H6C4.34315 21 3 19.6569 3 18V8C3 6.34315 4.34315 5 6 5H11V3.11805C10.6931 2.84339 10.5 2.44425 10.5 2C10.5 1.17157 11.1716 0.5 12 0.5C12.8284 0.5 13.5 1.17157 13.5 2ZM6 7C5.44772 7 5 7.44772 5 8V18C5 18.5523 5.44772 19 6 19H18C18.5523 19 19 18.5523 19 18V8C19 7.44772 18.5523 7 18 7H13H11H6ZM2 10H0V16H2V10ZM22 10H24V16H22V10ZM9 14.5C9.82843 14.5 10.5 13.8284 10.5 13C10.5 12.1716 9.82843 11.5 9 11.5C8.17157 11.5 7.5 12.1716 7.5 13C7.5 13.8284 8.17157 14.5 9 14.5ZM15 14.5C15.8284 14.5 16.5 13.8284 16.5 13C16.5 12.1716 15.8284 11.5 15 11.5C14.1716 11.5 13.5 12.1716 13.5 13C13.5 13.8284 14.1716 14.5 15 14.5Z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Fasilitas Canggih</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Laboratorium riset modern dan teknologi canggih kami mendukung inovasi dan penelitian mutakhir mahasiswa.</p>
            </div>
            <!-- Koneksi Industri Kuat -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600" data-aos="flip-right" data-aos-delay="1200">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                        <path d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"></path>
                        <path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Koneksi Industri Kuat</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Kerjasama dengan perusahaan terkemuka menyediakan peluang magang, proyek kolaboratif, dan jaringan profesional luas.</p>
            </div>
        </div>
        <div class="mt-11 flex justify-center items-center gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
            <!-- Organisasi Beragam -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600" data-aos="flip-right" data-aos-delay="1100">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                        <path d="M8.5 7C8.5 8.10457 7.60457 9 6.5 9C5.39543 9 4.5 8.10457 4.5 7C4.5 5.89543 5.39543 5 6.5 5C7.60457 5 8.5 5.89543 8.5 7ZM2.5 7C2.5 9.20914 4.29086 11 6.5 11C8.70914 11 10.5 9.20914 10.5 7C10.5 4.79086 8.70914 3 6.5 3C4.29086 3 2.5 4.79086 2.5 7ZM9 16.5C9 15.1193 7.88071 14 6.5 14C5.11929 14 4 15.1193 4 16.5V19H9V16.5ZM11 21H2V16.5C2 14.0147 4.01472 12 6.5 12C8.98528 12 11 14.0147 11 16.5V21ZM19.5 7C19.5 8.10457 18.6046 9 17.5 9C16.3954 9 15.5 8.10457 15.5 7C15.5 5.89543 16.3954 5 17.5 5C18.6046 5 19.5 5.89543 19.5 7ZM13.5 7C13.5 9.20914 15.2909 11 17.5 11C19.7091 11 21.5 9.20914 21.5 7C21.5 4.79086 19.7091 3 17.5 3C15.2909 3 13.5 4.79086 13.5 7ZM20 16.5C20 15.1193 18.8807 14 17.5 14C16.1193 14 15 15.1193 15 16.5V19H20V16.5ZM13 19V16.5C13 14.0147 15.0147 12 17.5 12C19.9853 12 22 14.0147 22 16.5V21H13V19Z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Organisasi Beragam</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Tersedia berbagai organisasi dan klub mahasiswa untuk mengembangkan minat dan bakat di luar akademik.</p>
            </div>
            <!-- Jaringan Alumni -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600" data-aos="flip-right" data-aos-delay="1000">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z"></path></svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Jaringan Alumni</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Jaringan alumni yang luas membantu memperluas peluang karir dan koneksi profesional.</p>
            </div>
                <!-- Kampus Nyaman -->
                <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600"  data-aos="flip-right" data-aos-delay="900">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="9.5" r="1.5"></circle><circle cx="15.493" cy="9.493" r="1.493"></circle><path d="M12 18c5 0 6-5 6-5H6s1 5 6 5z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Kampus Nyaman</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Lingkungan kampus yang modern dan nyaman mendukung kegiatan akademik dan sosial, ciptakan suasana belajar kondusif.</p>
            </div>
            <!-- Program Internasional -->
            <div class="group relative w-full rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-purple-600"  data-aos="flip-right" data-aos-delay="800">
                <div class="rounded-full flex justify-center items-center mb-5 w-14 h-14 group-hover:bg-white">
                    <svg class="flex-shrink-0 size-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                       <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM9.71002 19.6674C8.74743 17.6259 8.15732 15.3742 8.02731 13H4.06189C4.458 16.1765 6.71639 18.7747 9.71002 19.6674ZM10.0307 13C10.1811 15.4388 10.8778 17.7297 12 19.752C13.1222 17.7297 13.8189 15.4388 13.9693 13H10.0307ZM19.9381 13H15.9727C15.8427 15.3742 15.2526 17.6259 14.29 19.6674C17.2836 18.7747 19.542 16.1765 19.9381 13ZM4.06189 11H8.02731C8.15732 8.62577 8.74743 6.37407 9.71002 4.33256C6.71639 5.22533 4.458 7.8235 4.06189 11ZM10.0307 11H13.9693C13.8189 8.56122 13.1222 6.27025 12 4.24799C10.8778 6.27025 10.1811 8.56122 10.0307 11ZM14.29 4.33256C15.2526 6.37407 15.8427 8.62577 15.9727 11H19.9381C19.542 7.8235 17.2836 5.22533 14.29 4.33256Z"></path>
                    </svg>
                </div>
                <h4 class="text-lg font-semibold text-purple-600 mb-3 capitalize transition-all duration-500 group-hover:text-white">Program Internasional</h4>
                <p class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">Kesempatan untuk belajar di luar negeri dan program pertukaran pelajar, memberikan pengalaman global yang berharga.</p>
            </div>
        </div>
    </div>     
  </div>                               
    <!-- ========== END WHY US ========== -->

    <!-- ========== ALUR PENDAFTARAN ========== -->
    <div class="px-10 mx-auto max-w-5xl  sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="font-semibold text-2xl md:text-4xl lg:text-5xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 inline-block text-transparent bg-clip-text" data-aos="zoom-in" data-aos-delay="300">Alur Pendaftaran</h2>
            <p class="mx-auto mt-4 max-w-2xl lg:px-12 text-lg font-normal text-gray-600 dark:text-neutral-400 lg:text-xl lg:leading-8" data-aos="slide-up" data-aos-delay="500">
                Kesempatan gratis menjadi professor dengan empat langkah
            </p>
        </div>
        <ul class="mx-auto mt-12 grid max-w-md grid-cols-1 gap-10 sm:mt-16 lg:mt-20 lg:max-w-5xl lg:grid-cols-4" data-aos="fade-left">
            <li class="flex-start group relative flex lg:flex-col">
                <span
                    class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-600 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                    aria-hidden="true"></span>
                <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                        <path d="M17.6567 14.8284L16.2425 13.4142L17.6567 12C19.2188 10.4379 19.2188 7.90524 17.6567 6.34314C16.0946 4.78105 13.5619 4.78105 11.9998 6.34314L10.5856 7.75736L9.17139 6.34314L10.5856 4.92893C12.9287 2.58578 16.7277 2.58578 19.0709 4.92893C21.414 7.27208 21.414 11.0711 19.0709 13.4142L17.6567 14.8284ZM14.8282 17.6569L13.414 19.0711C11.0709 21.4142 7.27189 21.4142 4.92875 19.0711C2.5856 16.7279 2.5856 12.9289 4.92875 10.5858L6.34296 9.17157L7.75717 10.5858L6.34296 12C4.78086 13.5621 4.78086 16.0948 6.34296 17.6569C7.90506 19.2189 10.4377 19.2189 11.9998 17.6569L13.414 16.2426L14.8282 17.6569ZM14.8282 7.75736L16.2425 9.17157L9.17139 16.2426L7.75717 14.8284L14.8282 7.75736Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                        Daftar melalui Website
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Website resmi  <a href = https://ilhanhj-portfolio-v2.vercel.app/><span class="text-blue-500"> "Cheesecooluniversity.com"</span> </a>selain itu palsu.</h4>
                </div>
            </li>
            <li class="flex-start group relative flex lg:flex-col">
                <span
                    class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-600 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                    aria-hidden="true"></span>
                    <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                        <path d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                        Profil Biodata
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Isi data diri anda dengan benar sesuai dengan kartu identitas yang dimiliki.</h4>
                </div>
            </li>
            <li class="flex-start group relative flex lg:flex-col">
                <span
                    class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-600 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                    aria-hidden="true"></span>
                    <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                          <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                        Pilih Jurusan
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Tentukan pada bidang apa, anda akan membangun karir yang gemilang.</h4>
                </div>
            </li>
            <li class="flex-start group relative flex lg:flex-col">
                <span
                    class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-600 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                    aria-hidden="true"></span>
                    <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                        <path d="M12 2C12.5523 2 13 2.44772 13 3V6C13 6.55228 12.5523 7 12 7C11.4477 7 11 6.55228 11 6V3C11 2.44772 11.4477 2 12 2ZM12 17C12.5523 17 13 17.4477 13 18V21C13 21.5523 12.5523 22 12 22C11.4477 22 11 21.5523 11 21V18C11 17.4477 11.4477 17 12 17ZM22 12C22 12.5523 21.5523 13 21 13H18C17.4477 13 17 12.5523 17 12C17 11.4477 17.4477 11 18 11H21C21.5523 11 22 11.4477 22 12ZM7 12C7 12.5523 6.55228 13 6 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H6C6.55228 11 7 11.4477 7 12ZM19.0711 19.0711C18.6805 19.4616 18.0474 19.4616 17.6569 19.0711L15.5355 16.9497C15.145 16.5592 15.145 15.9261 15.5355 15.5355C15.9261 15.145 16.5592 15.145 16.9497 15.5355L19.0711 17.6569C19.4616 18.0474 19.4616 18.6805 19.0711 19.0711ZM8.46447 8.46447C8.07394 8.85499 7.44078 8.85499 7.05025 8.46447L4.92893 6.34315C4.53841 5.95262 4.53841 5.31946 4.92893 4.92893C5.31946 4.53841 5.95262 4.53841 6.34315 4.92893L8.46447 7.05025C8.85499 7.44078 8.85499 8.07394 8.46447 8.46447ZM4.92893 19.0711C4.53841 18.6805 4.53841 18.0474 4.92893 17.6569L7.05025 15.5355C7.44078 15.145 8.07394 15.145 8.46447 15.5355C8.85499 15.9261 8.85499 16.5592 8.46447 16.9497L6.34315 19.0711C5.95262 19.4616 5.31946 19.4616 4.92893 19.0711ZM15.5355 8.46447C15.145 8.07394 15.145 7.44078 15.5355 7.05025L17.6569 4.92893C18.0474 4.53841 18.6805 4.53841 19.0711 4.92893C19.4616 5.31946 19.4616 5.95262 19.0711 6.34315L16.9497 8.46447C16.5592 8.85499 15.9261 8.85499 15.5355 8.46447Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                       Validasi Data
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Tunggu informasi dari admin, data sedang di verifikasi.</h4>
                </div>
            </li>
            <li class="flex-start group relative flex lg:flex-col">
                <span
                    class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-600 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                    aria-hidden="true"></span>
                    <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                        <path d="M12.8995 6.85453L17.1421 11.0972L7.24264 20.9967H3V16.754L12.8995 6.85453ZM14.3137 5.44032L16.435 3.319C16.8256 2.92848 17.4587 2.92848 17.8492 3.319L20.6777 6.14743C21.0682 6.53795 21.0682 7.17112 20.6777 7.56164L18.5563 9.68296L14.3137 5.44032Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                        Kerjakan Test
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Karena Gratis sebagai gantinya kami memilih beberapa orang terpilih dan pantas.</h4>
                </div>
            </li>
            <li class="flex-start group relative flex lg:flex-col">
               <div
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-purple-600 bg-oldNavy transition-all duration-200 group-hover:border-gray-900 group-hover:bg-purple-600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-purple-600 group-hover:text-white">
                        <path d="M12 2 0 9 12 16 22 10.1667V17.5H24V9L12 2ZM3.99902 13.4905V18.0001C5.82344 20.429 8.72812 22.0001 11.9998 22.0001 15.2714 22.0001 18.1761 20.429 20.0005 18.0001L20.0001 13.4913 12.0003 18.1579 3.99902 13.4905Z"></path>
                    </svg>
                </div>
                <div class="ml-6 lg:ml-0 lg:mt-10" data-aos="slide-up">
                    <h3
                        class="text-xl font-semibold text-gray-500 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                        Sukses
                    </h3>
                    <h4 class="mt-2 text-base text-gray-600">Selamat anda berhasil menyelesaikan langkah-langkah untuk menjadi Professor.</h4>
                </div>
            </li>
        </ul>
    </div>
    <!-- ========== END ALUR PENDAFTARAN ========== -->

    <!-- ========== TESTIMONIAL ========== -->
    <div class="text-center py-16 md:py-32 lg:py-32">
            <h2 class="font-semibold text-2xl md:text-4xl lg:text-5xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 inline-block text-transparent bg-clip-text" data-aos="fade-zoom-in" data-aos-delay="300">Cheesecool Hall of Fame</h2>
            <p class="mx-auto mt-4 max-w-2xl lg:px-12 text-lg font-normal text-gray-600 dark:text-neutral-400 lg:text-xl lg:leading-8" data-aos="flip-left" data-aos-delay="300">
            Lulusan terbaik Cheesecool University yang terkenal memberikan testimoni tentang pengalamannya di kampus.
            </p>
    </div>
    <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">

<!--first block-->
    <ul class="space-y-8">
      <!--iqbal's block-->
        <li class="text-sm leading-6">
            <div class="relative group" data-aos="fade-right" data-aos-offset="200">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://baleehash.github.io/portfolio-website/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/iqbal-hero.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="iqbal">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Iqbal Maulana</h3>
                                <p class="text-gray-500 text-md">Owner Name-X</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Terimakasih karena Cheesecool saya bisa membuat satelit NAMEX.</p>
                    </div>
                </a>
            </div>
        </li>
        <!--ilhan's block-->
        <li class="text-sm leading-6">
            <div class="relative group" data-aos="slide-up">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://ilhanhj-portfolio-v2.vercel.app/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/ilhan-hero.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="ilhan">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Ilhan Haffiyan Juldan</h3>
                                <p class="text-gray-500 text-md">Human Software Engineer</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Cheesecool University, fondasi sukses saya. Lingkungan akademis unggul & dukungan dosen membekali saya dengan keterampilan untuk meraih prestasi. Saya bangga merekomendasikan Cheesecool sebagai pilihan terbaik untuk pendidikan berkualitas & masa depan cerah.</p>
                    </div>
                </a>
            </div>
        </li>
        <!--amba's block-->
        <li class="text-sm leading-6" data-aos="fade-right" data-aos-offset="100">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/ambatron6969/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/amba.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="amba">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Mas Amba</h3>
                                <p class="text-gray-500 text-md">CEO of AMBATRON</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Saya lulusan Teknik Elektro di Cheesecool University, Sekarang sedang Membangun Robot Pertama tanpa Batang di Indonesia.</p>
                    </div>
                </a>
            </div>
        </li>
    </ul>
<!--end first block-->
<!--second block-->
    <ul class="hidden space-y-8 sm:block">
      <!--ginanjar's block-->
        <li class="text-sm leading-6" data-aos="fade-down">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/ginanjar_pranowo/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/Homelander-S3.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="homelander">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Ginanjar Pranowo</h3>
                                <p class="text-gray-500 text-md">President Ohio</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">UINN, UNTAD, UII, ITEBE, tidak ada. Universitas terbaik hanya Cheesecool University.</p>
                    </div>
                </a>
            </div>
        </li>
        <!--speed's block-->
        <li class="text-sm leading-6" data-aos="zoom-in">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/ishowspeed/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/speed.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="speed">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Darren Watkins Jr.</h3>
                                <p class="text-gray-500 text-md">Content Creator</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">I'm NGL maaan this is the best campus i've ever seen. Big W for Mr.Hanball for making this building. </p>
                    </div>
                </a>
            </div>
        </li>
        <!--ridwan's block-->
        <li class="text-sm leading-6" data-aos="slide-up">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/ridwan.__f/" class="cursor-pointer">

                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/ridwan-hero-.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="ridwan">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Ridwan Stallin</h3>
                                <p class="text-gray-500 text-md">Professor</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Mengatakan semua kampus sama saja adalah cara menghibur diri. Lingkungan universitas memengaruhi masa depan Anda, jadi bijaklah dalam memilih. Saya hanya bisa merekomendasikan Cheesecool University.</p>
                    </div>
                </a>
            </div>
        </li>
    </ul>
<!--end second block-->
<!--third block-->
    <ul class="hidden space-y-8 lg:block">
    <!--aan's block-->
    <li class="text-sm leading-6" data-aos="zoom-in-down">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/aan_andiyana_s31/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/aan-hero-.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="aan">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Aan L Cottsir</h3>
                                <p class="text-gray-500 text-md">CEO of Gyattech</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Kurikulum dan lingkungan kampus di Cheesecool memberikan landasan yang sempurna bagi pertumbuhan pribadi dan akademik saya. Dengan fokus holistik dan fasilitas modern, saya merasa siap menghadapi tantangan di dunia nyata dengan percaya diri.</p>
                    </div>
                </a>
            </div>
        </li>
        <!--hanball's block-->
        <li class="text-sm leading-6" data-aos="zoom-in-left">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.youtube.com/watch?v=uHgt8giw1LY" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/hanbal-hero.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Hanball </h3>
                                <p class="text-gray-500 text-md">Head of Cheesecool University</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Saya tahu Cheesecool University adalah yang terbaik.</p>
                    </div>
                </a>
            </div>
        </li>
        <!--dedi's block-->
        <li class="text-sm leading-6" data-aos="flip-left">
            <div class="relative group">
                <div
                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div><a href="https://www.instagram.com/mastercorbuzier/" class="cursor-pointer">
                    <div
                        class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                        <div class="flex items-center space-x-4"><img
                                src="images/team/Baldheadass.png"
                                class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                            <div>
                                <h3 class="text-lg font-semibold text-white">Dedi Cahyadi</h3>
                                <p class="text-gray-500 text-md">Magiciant</p>
                            </div>
                        </div>
                        <p class="leading-normal text-gray-300 text-md">Anda terlalu polos jika tidak kuliah disini, Smart People kuliah nya Cheesecool University doong...</p>
                    </div>
                </a>
            </div>
        </li>
    </ul>
<!--end third block-->
</div>
</div>

    <!-- ========== END TESTIMONIAL ========== -->

    <!-- ========= FAQ ======== -->
<div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-32 mx-auto">
  <!-- Title -->
  <div class="max-w-3xl mx-auto text-center mb-10">
    <div class="text-center py-16 md:py-32">
      <h2 class="font-semibold text-2xl md:text-4xl lg:text-5xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 inline-block text-transparent bg-clip-text pb-1" data-aos="flip-down" data-aos-delay="300" data-aos-offset="200">Pertanyaan Anda, Terjawab</h2>
      <p class="mx-auto mt-4 max-w-2xl lg:px-12 text-lg font-normal text-gray-600 dark:text-neutral-400 lg:text-xl lg:leading-8" data-aos="fade-right" data-aos-offset="300">
        Jawaban untuk pertanyaan yang paling sering diajukan.</p>
  </div>
  </div>
  <!-- End Title -->

  <div class="max-w-2xl mx-auto">
    <!-- Accordion -->
    <div class="hs-accordion-group">
      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900 active" id="hs-basic-with-title-and-arrow-stretched-heading-one"  data-aos="zoom-in-down" data-aos-offset="300">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
        Bagaimana cara mendaftar di Cheesecool University?
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
          <p class="text-gray-800 dark:text-neutral-200">
          Anda dapat mendaftar secara online melalui situs web resmi Cheesecool University dengan mengisi formulir pendaftaran dan mengunggah dokumen yang diperlukan.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900" id="hs-basic-with-title-and-arrow-stretched-heading-two">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
        Bagaimana proses seleksi penerimaan?
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
          <p class="text-gray-800 dark:text-neutral-200">
          Proses seleksi melibatkan penilaian dokumen akademis, ujian masuk, dan wawancara. 
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900" id="hs-basic-with-title-and-arrow-stretched-heading-three">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
        Apakah ada beasiswa yang ditawarkan?
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
          <p class="text-gray-800 dark:text-neutral-200">
            Tidak, Karena di Cheesecool University bebas dari segala hal yang bersangkutan dengan uang
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900" id="hs-basic-with-title-and-arrow-stretched-heading-four">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
          Siapa pendiri Cheesecool University
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
          <p class="text-gray-800 dark:text-neutral-200">
            Tahun 2049, Mr.Hanball membuat Cheesecool University dan disitulah pendidikan di planet name-x meningkat secara tidak normal.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900" id="hs-basic-with-title-and-arrow-stretched-heading-five">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
        Bagaimana cara mendapatkan informasi tentang program studi yang ditawarkan?
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
          <p class="text-gray-800 dark:text-neutral-200">
          Informasi mengenai program studi yang ditawarkan, termasuk kurikulum, fakultas, dan peluang karir, dapat ditemukan di halaman program studi di situs web Cheesecool University.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-slate-900" id="hs-basic-with-title-and-arrow-stretched-heading-six">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-purple-500" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
        Apa saja fasilitas yang tersedia di kampus?
          <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
          <p class="text-gray-800 dark:text-neutral-200">
          Cheesecool University menyediakan fasilitas modern termasuk perpustakaan, laboratorium, pusat olahraga, dan asrama mahasiswa.
          </p>
        </div>
      </div>
    </div>
    <!-- End Accordion -->
  </div>
</div>
<!-- ========== END FAQ ========== -->

    <!-- ========== CONTACT ========== -->
<div class="relative overflow-hidden before:absolute before:start-1/2 before:bg-glowRect before:bg-no-repeat before:bg-bottom before:size-full before:-z-[1] before:transform before:-translate-x-1/2 lg:px-32" id="contact"  data-aos="fade-up" data-aos-offset="300">
    <div class="container px-10 lg:px-32 mx-auto" id="contact">
        <div class="lg:flex lg:items-center lg:-mx-6">
            <div class="lg:w-1/2 lg:mx-6">
                <h1 class="font-semibold py-1 text-2xl lg:text-5xl md:text-4xl text-transparent from-pink-600 via-purple-600 to-purple-600 bg-gradient-to-r bg-clip-text leading-[3.25rem] lg:mb-6 mx-auto max-w-max lg:max-w-md lg:mx-0 pb-2"  data-aos="fade-left" data-aos-offset="300">
                    Hubungi Kami
                </h1>
                <p class="mt-5 text-lg text-gray-400"  data-aos="fade-left" data-aos-offset="300">Kami siap membantu pertanyaan penerimaan. Hubungi kami di:</p>
                <div class="mt-6 space-y-8 md:mt-8"  data-aos="zoom-in-down" data-aos-offset="300">
                    <p class="flex items-start -mx-2"  data-aos="zoom-in-down" data-aos-offset="300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-purple-600 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="mx-2 text-gray-700 truncate dark:text-gray-400"  data-aos="zoom-in-down" data-aos-offset="300">
                        Jl. Soeharto No.666, Cisaranten Kulon, Kota Bandung.
                        </span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">+62 812 3456 789</span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">CheesecoolUniversity@gmail.com</span>
                    </p>
                </div>

                <div class="mt-6 w-80 md:mt-8"  data-aos="zoom-in-down" data-aos-offset="100">
                    <h3 class="text-gray-600 dark:text-gray-300 ">Ikuti Kami</h3>

                    <div class="flex mt-4 -mx-1.5 ">
                        <a class="mx-1.5 dark:hover:text-indigo-600 text-purple-600 transition-colors duration-300 transform hover:text-purple-600" href="https://x.com/Baleehash_">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                            <path d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z" fill="currentColor"/>
                          </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-indigo-600 text-purple-600 transition-colors duration-300 transform hover:text-purple-600" href="https://www.instagram.com/baleehash_/">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                            </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-indigo-600 text-purple-600 transition-colors duration-300 transform hover:text-purple-600" href="https://www.facebook.com/Baleeehash?_rdc=1&_rdr">
                         <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                            </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-indigo-600 text-purple-600 transition-colors duration-300 transform hover:text-purple-600" href="https://www.youtube.com/watch?v=uHgt8giw1LY">
                        <svg class="w-8 h-8" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3106 1.27838C27.5782 1.62071 28.5745 2.61957 28.9113 3.88573C29.524 6.18356 29.524 10.9809 29.524 10.9809C29.524 10.9809 29.524 15.7782 28.9113 18.076C28.5698 19.3469 27.5735 20.3457 26.3106 20.6834C24.0186 21.2977 14.8226 21.2977 14.8226 21.2977C14.8226 21.2977 5.63122 21.2977 3.33456 20.6834C2.06695 20.3411 1.07063 19.3422 0.73385 18.076C0.121094 15.7782 0.121094 10.9809 0.121094 10.9809C0.121094 10.9809 0.121094 6.18356 0.73385 3.88573C1.07531 2.61488 2.07162 1.61602 3.33456 1.27838C5.63122 0.664062 14.8226 0.664062 14.8226 0.664062C14.8226 0.664062 24.0186 0.664062 26.3106 1.27838ZM19.5234 10.9809L11.885 15.403V6.55872L19.5234 10.9809Z" fill="currentColor"/>
                              </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 lg:w-1/2 lg:mx-6"  data-aos="fade-up" data-aos-offset="300">
                <div
                    class="w-full px-8 py-10 mx-auto overflow-hidden lg:max-w-xl">
                    <form class="mt-6">
                        <div class="flex-1">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nama</label>
                            <input type="text" placeholder="Name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-purple-600 dark:focus:border-purple-600 focus:ring-purple-500 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="flex-1 mt-6">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Alamat Email</label>
                            <input type="email" placeholder="Email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-purple-600 dark:focus:border-purple-600 focus:ring-purple-500 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="w-full mt-6">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Pesan</label>
                            <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 border border-gray-200 rounded-md md:h-48 dark:placeholder-gray-600 dark:bg-oldNavy dark:text-gray-300 dark:border-gray-700 focus:border-purple-600 dark:focus:border-purple-600 focus:ring-purple-500 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                        </div>

                        <button class="w-full lg:px-6 lg:py-3 lg:mt-6   tracking-wide text-white capitalize mt-10 inline-flex col-span-2 items-center justify-center px-4 py-3 text-sm font-medium text-center  border border-transparent rounded-md gap-x-3 bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 dark:focus:ring-offset-gray-800">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ========== END CONTACT ========== -->






@endsection