<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ $title }}</title>
</head>
<body class="bg-neutral-900">
  <!-- ========== HEADER ========== -->
  <header class="sticky inset-x-0 z-50 flex flex-wrap w-full top-4 md:justify-start md:flex-nowrap">
    <nav class="relative max-w-[66rem] w-full bg-neutral-800 rounded-[28px] py-3 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto" aria-label="Global">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a class="flex-none inline-block text-xl font-semibold rounded-md focus:outline-none focus:opacity-80" href="../../templates/agency/index.html" aria-label="Preline">
          <svg class="h-auto w-28" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-white" fill="currentColor" />
            <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-white" stroke="currentColor" stroke-width="2" />
            <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-white" stroke="currentColor" stroke-width="2" />
            <circle cx="13" cy="16.5214" r="5" class="fill-white" fill="currentColor" />
          </svg>
        </a>
        <!-- End Logo -->

        <div class="md:hidden">
          <button type="button" class="flex items-center justify-center text-sm font-semibold text-white rounded-full hs-collapse-toggle size-8 bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
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

      <!-- Collapse -->
      <div id="navbar-collapse" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block">
        <div class="flex flex-col mt-5 gap-y-4 gap-x-0 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="../../templates/agency/index.html" aria-current="page">Home</a>
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">Stories</a>
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">Reviews</a>
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">Approach</a>

          <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:py-4">
            <button type="button" class="flex items-center w-full text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300">
              About
              <svg class="flex-shrink-0 ms-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
              </svg>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-neutral-800 md:shadow-md rounded-lg p-2 before:absolute top-full before:-top-5 before:start-0 before:w-full before:h-5">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                About
              </a>
              <div class="hs-dropdown relative [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover]">
                <button type="button" class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300">
                  Sub Menu
                  <svg class="flex-shrink-0 sm:-rotate-90 ms-2 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                  </svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 md:mt-2 bg-neutral-800 md:shadow-md rounded-lg p-2 before:absolute before:-end-5 before:top-0 before:h-full before:w-5 top-0 end-full !mx-[10px]">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                    About
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                    Downloads
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                    Team Account
                  </a>
                </div>
              </div>

              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                Downloads
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                Team Account
              </a>
            </div>
          </div>

          <div>
            <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none" href="../../templates/agency/index.html#contact">
              Contact us
            </a>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Hero -->
    <div class="bg-neutral-900">
      <div class="max-w-5xl px-4 pt-24 pb-24 mx-auto xl:px-0 lg:pt-32">
        <h1 class="text-5xl font-semibold text-white md:text-6xl">
          <span class="text-[#ff0]">Preline Agency:</span> Transforming ideas into reality
        </h1>
        <div class="max-w-4xl">
          <p class="mt-5 text-lg text-neutral-400">
            It is a creative hub where imagination meets craftsmanship to transform ideas into tangible realities. At Preline Agency, we specialize in turning conceptual visions into concrete forms, whether it be through design, artistry, or technological innovation.
          </p>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- Clients -->
    <div class="relative pt-4 overflow-hidden bg-neutral-900">
      <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-neutral-700/50" stroke="currentColor" />
        <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-neutral-700/50" stroke="currentColor" />
      </svg>

      <div class="relative z-10">
        <div class="max-w-5xl px-4 mx-auto xl:px-0">
          <div class="mb-4">
            <h2 class="text-neutral-400">Trusted by Open Source, enterprise, and more than 99,000 of you</h2>
          </div>

          <div class="flex justify-between gap-6">
            <svg class="w-16 h-auto py-3 lg:py-5 md:w-20 lg:w-24 text-neutral-400" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg">
              <path d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z" fill="currentColor" />
            </svg>

            <svg class="w-16 h-auto py-3 lg:py-5 md:w-20 lg:w-24 text-neutral-400" xmlns="http://www.w3.org/2000/svg" viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500" height="607">
              <path d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z" fill="currentColor" />
            </svg>

            <svg class="w-16 h-auto py-3 lg:py-5 md:w-20 lg:w-24 text-neutral-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2428 1002">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M311.5 389.8h191.8l67 117.5 77.8-117.5h178.3L682.7 590.7l154 220.7H648.1l-77.8-135.8-91.7 135.8h-175l153.2-220.7-145.3-200.9Z" fill="currentColor" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1279.3 640.7H955.4c2.9 26 10 45.2 21 58a76.5 76.5 0 0 0 61.1 27.3c16 0 31.5-4 45.3-12 8.8-5 18.2-13.7 28.2-26.5l159.2 14.7c-24.4 42.4-53.7 72.7-88 91.2-34.5 18.2-83.8 27.5-148.2 27.5-55.8 0-99.7-7.9-131.8-23.6a193.2 193.2 0 0 1-79.6-75c-21-34.4-31.6-74.6-31.6-121 0-65.8 21.2-119.2 63.3-159.8 42.3-40.8 100.6-61.3 175-61.3 60.3 0 108 9.2 142.8 27.5a184 184 0 0 1 79.8 79.3c18.3 34.7 27.4 79.8 27.4 135.3v18.4ZM1115 563.3c-3.2-31.3-11.6-53.7-25.2-67.1a73.1 73.1 0 0 0-53.8-20.3 73.6 73.6 0 0 0-61.6 30.6c-9.7 12.7-16 31.6-18.5 56.8H1115Zm137-173.5h168.3l81.9 267.1 84.5-267H1750l-179.1 421.5h-143.3L1252 389.8Zm463.2 212c0-64.3 21.7-117.4 65-159 43.5-41.7 102-62.6 176-62.6 84.4 0 148.2 24.5 191.3 73.5 34.6 39.4 52 88 52 145.8 0 64.7-21.5 117.8-64.5 159.3-43 41.3-102.4 62-178.5 62-67.7 0-122.5-17.1-164.3-51.5-51.4-42.6-77-98.4-77-167.6Zm162-.5c0 37.7 7.5 65.5 22.8 83.4a72 72 0 0 0 57.3 27.1c23.4 0 42.5-9 57.4-26.7 15-17.8 22.5-46 22.5-85.4 0-36.4-7.6-63.7-22.7-81.5a70.5 70.5 0 0 0-56-26.7c-23.5 0-43 9-58.3 27-15.4 18.2-23 45.9-23 82.8ZM2363.1.1a64 64 0 0 1 0 127.9 64 64 0 0 1 0-128Z" fill="currentColor" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1912.1 671.5c220.3-135 326.4-327 334-419.2 8.7-106.7-71-235.9-358.9-238-345 3.6-790 158.3-1163.6 360.4h138c315.8-152.6 672-266.2 1000.8-275.2 287.7-7.8 304.4 149.2 302 199-3.6 71-74.7 234.5-252.3 373Zm-1315.7-222-36 22.7 10 17.5 26-40.1ZM419.8 567.5C212 717 57 873.2.8 1001.9 77.8 897.1 217 771 394.9 647l40.4-58.1-15.5-21.4Z" fill="currentColor" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2036.3 580a819.8 819.8 0 0 0 114.2-122.8l-3-3.5c-8-9.2-17-17.5-26.5-25-21 39.8-50 83.7-88.2 128.3 1.6 7 2.8 14.7 3.5 23Z" fill="currentColor" />
            </svg>

            <svg class="w-16 h-auto py-3 lg:py-5 md:w-20 lg:w-24 text-neutral-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 33">
              <path d="M9.3 16.5C9.3 9 14.3 2.7 21.2.7a16.5 16.5 0 1 0 0 31.6c-6.9-2-11.9-8.3-11.9-15.8Z" fill="currentColor" />
              <path d="M21.7 10c4 0 7.4 2.8 8.5 6.4a8.9 8.9 0 1 0-17 0c1-3.6 4.4-6.3 8.5-6.3Z" fill="currentColor" />
              <path d="M24.8 19.4c0 3-2 5.5-4.8 6.3A6.6 6.6 0 1 0 20 13c2.8.8 4.8 3.4 4.8 6.4Z" fill="currentColor" />
              <path d="M39.6 13.5A4.4 4.4 0 0 1 44 9.1h1.3v2.7l-1 .2-1 .6-.2.4-.1.5h2.3v3H43v9.2h-3.4v-9.3h-1.3v-2.9h1.3ZM55.7 13.5h3.4v6.1a6.9 6.9 0 0 1-1.7 4.6 6 6 0 0 1-4.5 1.8c-1 0-1.8-.1-2.5-.5a6 6 0 0 1-3.2-3.4c-.3-.8-.4-1.6-.4-2.5v-6H50v6c0 .5 0 1 .2 1.3l.5 1c.2.4.5.6.9.8.3.2.8.3 1.2.3a2.6 2.6 0 0 0 2.1-1c.3-.3.4-.7.5-1l.2-1.4v-6ZM61.2 25.7V9.5h3.4v16.2h-3.4ZM66.9 25.7V9.5h3.3v16.2H67ZM78.5 21.2l3.3-7.7h3.7l-5.7 12.2h-2.7l-5.6-12.2H75l3.4 7.7ZM87 13.5h3.3v12.2H87V13.5Zm1.6-5 .8.1.6.4.4.7.2.7a1.9 1.9 0 0 1-.6 1.4l-.6.4a2 2 0 0 1-.8.1c-.5 0-1-.2-1.3-.5a2 2 0 0 1-.4-2.1c0-.3.2-.5.4-.7l.6-.4.7-.1ZM98.8 13.2a6.7 6.7 0 0 1 4.8 1.9 6.3 6.3 0 0 1 1.9 5.7h-9.8a3.3 3.3 0 0 0 3.2 2.2c.5 0 1-.1 1.4-.4.5-.2.9-.5 1.2-1h3.7c-.2.7-.5 1.3-1 1.8a6.1 6.1 0 0 1-3.3 2.3 7 7 0 0 1-6.9-1.6 6.1 6.1 0 0 1-2-4.5 6.1 6.1 0 0 1 2-4.5c.7-.6 1.4-1 2.2-1.4.8-.3 1.7-.5 2.6-.5Zm3.2 5.2c-.3-.6-.7-1.1-1.2-1.5-.6-.4-1.3-.7-2-.7s-1.4.3-2 .7c-.5.4-.9.9-1.1 1.5h6.3ZM123 13.5h3.6l-5 12.2H119l-2.5-6.5-2.5 6.5h-2.7l-5-12.2h3.6l2.7 7 2.8-7h2.2l2.8 7 2.7-7Z" fill="currentColor" />
            </svg>

            <svg class="w-16 h-auto py-3 lg:py-5 md:w-20 lg:w-24 text-neutral-400" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 88 22" xml:space="preserve" enable-background="new 0 0 88 22">
              <path d="M36.3 14.6a7.3 7.3 0 0 1-5.6 2.8c-3.8 0-6.8-2.7-6.8-6.2a6 6 0 0 1 2-4.5A6 6 0 0 1 30.5 5c2.2 0 4.3 1 5.6 2.8l-2.5 1.8a3.7 3.7 0 0 0-3.1-1.8 3.5 3.5 0 0 0-3.5 3.5c.1 2 1.7 3.5 3.6 3.5 1.3 0 2.5-.6 3.2-1.7l2.5 1.5z" fill="currentColor" />
              <path d="M37.7 0H40.8V17.1H37.7z" fill="currentColor" />
              <path d="M49.1 14.7c2 0 3.7-1.6 3.8-3.6-.1-2-1.8-3.6-3.8-3.6s-3.7 1.6-3.8 3.6c.1 2 1.7 3.6 3.8 3.6m0-9.8c1.7-.1 3.4.5 4.7 1.7 1.3 1.2 2 2.8 2.1 4.5a6.4 6.4 0 0 1-2.1 4.5 6.4 6.4 0 0 1-4.7 1.7c-3.8 0-6.8-2.7-6.8-6.2s3-6.2 6.8-6.2" fill="currentColor" />
              <path d="M55.3 5.1 59 5.1 62 11.5 65.2 5.1 68.6 5.1 62 17.8z" fill="currentColor" />
              <path d="M77.5 9.4a3 3 0 0 0-2.9-1.9c-1.3 0-2.5.7-3.1 1.9h6zm2 6.3a7 7 0 0 1-4.6 1.6c-3.8 0-6.8-2.7-6.8-6.2 0-1.7.7-3.3 1.9-4.5a6 6 0 0 1 4.6-1.7c1.7-.1 3.3.6 4.5 1.8s1.8 2.8 1.7 4.5v.8h-9.6a3.9 3.9 0 0 0 6.5 1.5l1.8 2.2zm2.8-5.3c0-2.9 2.2-5.2 5.7-5.2V8c-.7 0-1.5.3-2 .8s-.7 1.3-.6 2v6.3h-3.1v-6.7z" fill="currentColor" />
              <path d="M9.7 5.6a5 5 0 0 0-8.3-3.5C0 3.5-.4 5.6.3 7.4s2.5 3 4.5 3h4.9V5.6zm1.4 0a5 5 0 0 1 8.3-3.5c1.4 1.4 1.8 3.5 1.1 5.3s-2.5 3-4.5 3h-4.9V5.6zm0 11a5 5 0 0 0 8.3 3.5c1.4-1.4 1.8-3.5 1.1-5.3s-2.5-3-4.5-3h-4.9v4.8zm-6.3 3.5c1.9 0 3.5-1.5 3.5-3.5v-3.5H4.8c-1.9 0-3.5 1.5-3.5 3.5s1.6 3.5 3.5 3.5zm4.9-3.5a5 5 0 0 1-8.3 3.5C0 18.7-.4 16.6.3 14.8s2.5-3 4.5-3h4.9v4.8z" fill="currentColor" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients -->

    <!-- Case Stories -->
    <div class="bg-neutral-900 bg-gradient-to-t from-black to-transparent">
      <div class="max-w-5xl px-4 py-24 mx-auto xl:px-0">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-2xl font-semibold text-white md:text-4xl md:leading-tight">Success stories</h2>
          <p class="mt-1 text-neutral-400">Global brands see measurable success when they collaborate with us. From higher conversion and payment approval rates to faster processing speeds. Discover their stories here.</p>
        </div>
        <!-- End Title -->

        <!-- Card Grid -->
        <div class="grid items-center grid-cols-1 border divide-y lg:grid-cols-3 border-neutral-700 lg:divide-y-0 lg:divide-x divide-neutral-700 rounded-xl">
          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-neutral-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#ff0]/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_11766_122079)">
                  <path d="M16 32C7.16 32 0 24.84 0 16C0 7.16 7.16 0 16 0C24.84 0 32 7.16 32 16C32 24.84 24.84 32 16 32Z" fill="#FFE01B" />
                  <path d="M11.72 19.28C11.74 19.3 11.74 19.34 11.72 19.38C11.64 19.52 11.48 19.6 11.32 19.58C11.02 19.54 10.8 19.3 10.82 19C10.82 18.8 10.86 18.62 10.92 18.42C11.02 18.18 10.92 17.92 10.72 17.78C10.6 17.7 10.44 17.68 10.3 17.7C10.16 17.72 10.04 17.82 9.96001 17.94C9.90001 18.04 9.86001 18.14 9.84001 18.24C9.84001 18.26 9.82001 18.28 9.82001 18.28C9.78001 18.4 9.70001 18.44 9.64001 18.44C9.62001 18.44 9.58001 18.42 9.56001 18.36C9.50001 18.02 9.62001 17.68 9.84001 17.42C10.04 17.2 10.32 17.1 10.62 17.14C10.92 17.18 11.2 17.38 11.32 17.66C11.46 18 11.42 18.38 11.24 18.7C11.22 18.72 11.22 18.76 11.2 18.78C11.14 18.9 11.12 19.06 11.2 19.18C11.26 19.26 11.34 19.3 11.44 19.3C11.48 19.3 11.52 19.3 11.56 19.28C11.64 19.24 11.7 19.24 11.72 19.28ZM24.94 19.6C24.92 20.22 24.78 20.82 24.56 21.4C23.44 24.1 20.76 25.6 17.56 25.5C14.58 25.42 12.04 23.84 10.94 21.26C10.24 21.24 9.56001 20.96 9.06001 20.5C8.52001 20.04 8.18001 19.4 8.10001 18.7C8.04001 18.22 8.10001 17.74 8.28001 17.28L7.66001 16.76C4.78001 14.36 13.72 4.4 16.56 6.9C16.58 6.92 17.54 7.86 17.54 7.86C17.54 7.86 18.06 7.64 18.08 7.64C20.58 6.6 22.62 7.1 22.62 8.76C22.62 9.62 22.08 10.62 21.2 11.54C21.56 11.9 21.8 12.34 21.92 12.82C22.02 13.16 22.06 13.5 22.08 13.86C22.1 14.22 22.12 15.04 22.12 15.04C22.14 15.04 22.4 15.12 22.48 15.14C23 15.26 23.46 15.48 23.86 15.82C24.08 16.02 24.2 16.3 24.26 16.58C24.32 16.96 24.22 17.34 24 17.64C24.06 17.78 24.1 17.9 24.16 18.04C24.24 18.28 24.28 18.48 24.3 18.5C24.52 18.54 24.94 18.86 24.94 19.6ZM12.34 18.12C12.14 16.86 11.3 16.42 10.72 16.38C10.58 16.38 10.44 16.38 10.28 16.42C9.26001 16.62 8.66001 17.5 8.78001 18.64C8.96001 19.7 9.82001 20.5 10.88 20.56C10.98 20.56 11.08 20.56 11.18 20.54C12.24 20.38 12.5 19.24 12.34 18.12ZM14.1 10.12C14.98 9.4 15.9 8.76 16.88 8.2C16.88 8.2 16.1 7.3 15.86 7.22C14.42 6.82 11.3 8.98 9.30001 11.84C8.50001 13 7.34001 15.04 7.90001 16.08C8.10001 16.32 8.32001 16.52 8.56001 16.72C8.92001 16.2 9.48001 15.84 10.12 15.72C10.9 13.54 12.28 11.6 14.1 10.12ZM17.22 20.1C17.3 20.44 17.56 20.72 17.9 20.8C18.08 20.86 18.24 20.92 18.44 20.94C20.72 21.34 22.86 20.02 23.34 19.7C23.38 19.68 23.4 19.7 23.38 19.74C23.36 19.76 23.34 19.78 23.34 19.8C22.76 20.56 21.18 21.44 19.12 21.44C18.22 21.44 17.32 21.12 17 20.64C16.48 19.88 16.98 18.78 17.82 18.9C17.82 18.9 18.12 18.94 18.2 18.94C19.52 19.06 20.86 18.86 22.08 18.32C23.24 17.78 23.68 17.18 23.62 16.7C23.6 16.56 23.52 16.42 23.42 16.3C23.1 16.04 22.72 15.86 22.32 15.78C22.14 15.72 22.02 15.7 21.88 15.66C21.64 15.58 21.52 15.52 21.5 15.06C21.48 14.86 21.46 14.18 21.44 13.88C21.42 13.38 21.36 12.7 20.94 12.42C20.84 12.34 20.7 12.3 20.58 12.3C20.5 12.3 20.44 12.3 20.36 12.32C20.14 12.36 19.96 12.48 19.8 12.64C19.4 13 18.88 13.18 18.34 13.14C18.04 13.12 17.74 13.08 17.38 13.06C17.32 13.06 17.24 13.06 17.18 13.04C16.22 13.06 15.44 13.78 15.32 14.74C15.12 16.16 16.14 16.88 16.44 17.32C16.48 17.38 16.52 17.44 16.52 17.52C16.52 17.6 16.48 17.68 16.42 17.72C15.6 18.64 15.3 19.92 15.62 21.12C15.66 21.26 15.7 21.4 15.76 21.54C16.5 23.28 18.82 24.1 21.08 23.36C21.38 23.26 21.66 23.14 21.94 23C22.44 22.76 22.88 22.42 23.26 22.02C23.84 21.44 24.22 20.68 24.36 19.86C24.42 19.4 24.32 19.24 24.2 19.16C24.1 19.1 24 19.08 23.88 19.1C23.82 18.74 23.72 18.4 23.58 18.08C22.94 18.56 22.2 18.94 21.42 19.16C20.48 19.42 19.52 19.52 18.54 19.48C17.92 19.42 17.5 19.24 17.34 19.76C18.28 20.08 19.28 20.18 20.28 20.06C20.3 20.06 20.34 20.08 20.34 20.1C20.34 20.12 20.32 20.14 20.3 20.16C20.22 20.14 19.06 20.68 17.22 20.1ZM13.84 11.88C14.6 11.34 15.48 10.96 16.38 10.76C17.42 10.52 18.48 10.52 19.52 10.76C19.56 10.76 19.58 10.7 19.54 10.68C19 10.4 18.42 10.24 17.8 10.22C17.78 10.22 17.76 10.2 17.76 10.18V10.16C17.86 10.04 17.96 9.92 18.08 9.84C18.1 9.82 18.1 9.8 18.08 9.8L18.06 9.78C17.32 9.86 16.62 10.1 15.98 10.52C15.96 10.52 15.94 10.52 15.94 10.52V10.5C15.98 10.32 16.06 10.14 16.16 9.96C16.16 9.94 16.16 9.92 16.14 9.92H16.12C15.22 10.42 14.42 11.08 13.76 11.86C13.74 11.88 13.74 11.9 13.76 11.9C13.8 11.9 13.82 11.9 13.84 11.88ZM19.84 16.7C19.96 16.78 20.14 16.76 20.24 16.64C20.3 16.52 20.22 16.38 20.06 16.3C19.94 16.22 19.76 16.24 19.66 16.36C19.6 16.46 19.68 16.62 19.84 16.7ZM20.34 14.88C20.38 15.08 20.46 15.28 20.58 15.44C20.7 15.42 20.84 15.42 20.96 15.44C21.04 15.22 21.04 14.98 20.98 14.76C20.88 14.34 20.76 14.1 20.52 14.14C20.26 14.18 20.24 14.48 20.34 14.88ZM20.88 15.84C20.72 15.8 20.54 15.88 20.48 16.06C20.44 16.22 20.52 16.4 20.7 16.46C20.88 16.52 21.04 16.42 21.1 16.24C21.1 16.22 21.12 16.18 21.12 16.16C21.12 16 21.02 15.86 20.88 15.84Z" fill="black" />
                  <path d="M16.66 15.8C16.62 15.8 16.6 15.78 16.6 15.76C16.58 15.68 16.7 15.58 16.8 15.48C17.14 15.22 17.6 15.18 17.98 15.34C18.16 15.42 18.32 15.54 18.42 15.7C18.46 15.76 18.46 15.82 18.44 15.84C18.4 15.88 18.3 15.84 18.12 15.76C17.92 15.66 17.68 15.6 17.46 15.62C17.2 15.66 16.92 15.72 16.66 15.8ZM18.38 16.16C18.22 16 18 15.92 17.8 15.96C17.64 15.98 17.5 16.04 17.38 16.14C17.32 16.18 17.28 16.24 17.28 16.32C17.28 16.34 17.28 16.36 17.3 16.36C17.32 16.36 17.32 16.38 17.34 16.38C17.4 16.38 17.46 16.36 17.5 16.34C17.74 16.26 17.98 16.22 18.22 16.26C18.34 16.28 18.38 16.28 18.42 16.24C18.4 16.2 18.4 16.18 18.38 16.16Z" fill="black" />
                </g>
                <defs>
                  <clipPath id="clip0_11766_122079">
                    <rect width="32" height="32" fill="white" />
                  </clipPath>
                </defs>
              </svg>

              <div class="mt-5">
                <p class="text-5xl font-semibold text-white">43%</p>
                <h3 class="mt-5 text-lg font-medium text-white">Enhancement in Customer Engagement</h3>
                <p class="mt-1 text-neutral-400">With the aim of optimizing customer interactions and boosting brand loyalty, the team at Preline leveraged Mailchimp's powerful tools and expertise to deliver exceptional results.</p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-[#ff0] pb-1 border-b-2 border-neutral-700 group-hover:border-[#ff0] transition focus:outline-none group-focus:border-[#ff0]">
                Case study
              </span>
            </p>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-neutral-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#ff0]/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.462 6.28384C27.44 6.12384 27.2998 6.03529 27.184 6.02554C27.0684 6.01589 24.6215 5.83452 24.6215 5.83452C24.6215 5.83452 22.9221 4.1474 22.7355 3.96066C22.5489 3.77403 22.1844 3.8308 22.0429 3.87244C22.0221 3.87858 21.6716 3.98674 21.0919 4.16614C20.5243 2.53261 19.5224 1.03145 17.7599 1.03145C17.7112 1.03145 17.6611 1.03343 17.611 1.03628C17.1098 0.373373 16.4889 0.0853729 15.9525 0.0853729C11.8468 0.0853729 9.88524 5.21798 9.27023 7.82619C7.67483 8.32055 6.54146 8.672 6.39669 8.71748C5.50617 8.99682 5.47801 9.02488 5.36108 9.864C5.27308 10.4993 2.94299 28.5189 2.94299 28.5189L21.0995 31.9208L30.9373 29.7925C30.9373 29.7925 27.4837 6.44384 27.462 6.28384ZM20.0884 4.4765L18.5521 4.952C18.5526 4.84373 18.5532 4.73721 18.5532 4.62072C18.5532 3.60548 18.4123 2.78806 18.1862 2.14006C19.0943 2.25403 19.6992 3.28735 20.0884 4.4765ZM17.0596 2.34137C17.3121 2.97403 17.4763 3.88198 17.4763 5.10718C17.4763 5.16987 17.4757 5.22718 17.4752 5.28515C16.476 5.59463 15.3903 5.93063 14.3022 6.26773C14.9132 3.90981 16.0584 2.77096 17.0596 2.34137ZM15.8398 1.18663C16.017 1.18663 16.1955 1.2468 16.3663 1.36439C15.0505 1.98356 13.6401 3.54302 13.0445 6.65721L10.5364 7.43398C11.2341 5.05863 12.8907 1.18663 15.8398 1.18663Z" fill="#95BF46" />
                <path d="M27.184 6.02553C27.0684 6.01589 24.6215 5.83452 24.6215 5.83452C24.6215 5.83452 22.9221 4.1474 22.7356 3.96066C22.6658 3.89118 22.5716 3.85556 22.4732 3.84022L21.1004 31.9205L30.9373 29.7925C30.9373 29.7925 27.4837 6.44383 27.462 6.28383C27.44 6.12383 27.2999 6.03529 27.184 6.02553Z" fill="#5E8E3E" />
                <path d="M17.7599 11.4614L16.5469 15.0697C16.5469 15.0697 15.4841 14.5025 14.1813 14.5025C12.2714 14.5025 12.1753 15.701 12.1753 16.0031C12.1753 17.6511 16.4711 18.2825 16.4711 22.1427C16.4711 25.1797 14.5449 27.1353 11.9476 27.1353C8.83092 27.1353 7.23706 25.1956 7.23706 25.1956L8.07158 22.4384C8.07158 22.4384 9.70994 23.8449 11.0924 23.8449C11.9957 23.8449 12.3632 23.1337 12.3632 22.614C12.3632 20.4643 8.83881 20.3684 8.83881 16.8361C8.83881 13.863 10.9727 10.986 15.2802 10.986C16.94 10.986 17.7599 11.4614 17.7599 11.4614Z" fill="white" />
              </svg>

              <div class="mt-5">
                <p class="text-5xl font-semibold text-white">20%</p>
                <h3 class="mt-5 text-lg font-medium text-white">Rise in E-commerce</h3>
                <p class="mt-1 text-neutral-400">In collaboration with Shopify, Preline embarked on a mission to revolutionize the e-commerce experience for a fictitious fashion brand, "StyleAura.".</p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-[#ff0] pb-1 border-b-2 border-neutral-700 group-hover:border-[#ff0] transition focus:outline-none group-focus:border-[#ff0]">
                Case study
              </span>
            </p>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-neutral-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#ff0]/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.8875 15.3054C32.9242 16.2093 32.8209 17.1099 32.5811 17.9792C32.3447 18.8486 31.9716 19.6695 31.4787 20.4141C30.989 21.1593 30.3861 21.8167 29.6935 22.3607L29.6769 22.3745L23.019 27.563L19.7451 30.1433L17.7501 31.7089C17.6335 31.8024 17.5036 31.8716 17.3671 31.9201C17.2305 31.9686 17.084 31.9929 16.9374 31.9929C16.7942 31.9929 16.6477 31.9686 16.5111 31.9201C16.3745 31.8716 16.2447 31.8024 16.1281 31.7089L14.1331 30.1433L10.8591 27.563L4.24125 22.4057L4.20129 22.378L4.18796 22.3641C3.49187 21.8203 2.88904 21.1623 2.39611 20.4176C1.90319 19.6729 1.53016 18.8486 1.29036 17.9792C1.05056 17.1099 0.947313 16.2059 0.98395 15.3019C1.02392 14.3979 1.20044 13.5078 1.51018 12.6626L1.55348 12.5414L5.90654 0.747936C5.92875 0.69021 5.95539 0.634792 5.98648 0.581684C6.01534 0.528576 6.04976 0.478931 6.08972 0.43275C6.12747 0.38426 6.16855 0.339234 6.21295 0.297671C6.25736 0.258417 6.30399 0.221472 6.35284 0.186836C6.45609 0.121028 6.56267 0.0725381 6.67924 0.0448295C6.79248 0.0136573 6.91238 -0.000196993 7.02895 0.00673016C7.14885 0.0136573 7.26542 0.0379024 7.37533 0.0829289C7.48524 0.124492 7.59181 0.186836 7.68507 0.263035C7.72948 0.302289 7.77278 0.343852 7.81496 0.387724C7.85493 0.433905 7.89046 0.483549 7.92154 0.536658C7.95485 0.587457 7.98371 0.641719 8.00814 0.699446C8.03256 0.754863 8.05254 0.812589 8.06809 0.872625L11.0023 10.2139H22.8792L25.8134 0.872625C25.8289 0.812589 25.85 0.754863 25.8767 0.699446C25.9011 0.644029 25.93 0.589766 25.9633 0.536658C25.9944 0.485858 26.0299 0.437368 26.0699 0.391187C26.1098 0.345006 26.1531 0.302289 26.1997 0.263035C26.293 0.186836 26.3962 0.127955 26.5062 0.0829289C26.6194 0.0413659 26.736 0.0171209 26.8525 0.0101937C26.9724 0.00326659 27.089 0.0136573 27.2056 0.0448295C27.3188 0.0760017 27.4287 0.124492 27.5286 0.1903C27.5797 0.222627 27.6275 0.259571 27.6719 0.301134C27.7163 0.340388 27.7573 0.38426 27.7951 0.43275C27.8328 0.48124 27.8673 0.532039 27.8983 0.585148C27.9272 0.638256 27.9527 0.693673 27.9749 0.751399L32.3213 12.5483L32.3646 12.6696C32.6744 13.5112 32.8509 14.4014 32.8875 15.3054Z" fill="#E24329" />
                <path d="M32.8909 15.309C32.9275 16.2095 32.8243 17.1135 32.5845 17.9829C32.3447 18.8523 31.9717 19.6766 31.4787 20.4213C30.9858 21.1659 30.383 21.824 29.6902 22.3678L29.6736 22.3816L23.0157 27.5701C23.0157 27.5701 20.1881 25.3499 16.9374 22.7903L26.4795 15.2813C26.9092 14.9453 27.3588 14.6371 27.8218 14.3531C28.2847 14.0656 28.7643 13.8093 29.2539 13.5807C29.7468 13.3521 30.2498 13.1477 30.7593 12.978C31.2722 12.8049 31.7918 12.6628 32.3214 12.5485L32.3647 12.6698C32.6744 13.5149 32.8509 14.405 32.8909 15.309Z" fill="#FC6D26" />
                <path d="M16.9374 22.7903C20.1881 25.343 23.0191 27.5701 23.0191 27.5701L19.7451 30.1504L17.7501 31.716C17.6335 31.8095 17.5036 31.8788 17.3671 31.9273C17.2305 31.9758 17.084 32 16.9374 32C16.7942 32 16.6477 31.9758 16.5111 31.9273C16.3746 31.8788 16.2447 31.8095 16.1281 31.716L14.1331 30.1504L10.8591 27.5701C10.8591 27.5701 13.6868 25.343 16.9374 22.7903Z" fill="#FCA326" />
                <path d="M16.9374 22.7834C13.6834 25.343 10.8591 27.5632 10.8591 27.5632L4.24125 22.4059L4.20129 22.3782L4.18796 22.3643C3.49187 21.8205 2.88904 21.1625 2.39611 20.4178C1.90319 19.6731 1.53016 18.8488 1.29036 17.9794C1.05056 17.1101 0.947313 16.2061 0.98395 15.3021C1.02392 14.3981 1.20044 13.508 1.51018 12.6628L1.55348 12.5416C2.08304 12.6559 2.60261 12.7979 3.11552 12.9711C3.6251 13.1443 4.12801 13.3452 4.62094 13.5772C5.11053 13.8058 5.59014 14.0656 6.05309 14.3496C6.51604 14.6336 6.96233 14.9453 7.39531 15.2813L16.9374 22.7834Z" fill="#FC6D26" />
              </svg>

              <div class="mt-5">
                <p class="text-5xl font-semibold text-white">12%</p>
                <h3 class="mt-5 text-lg font-medium text-white">Streamlining Development</h3>
                <p class="mt-1 text-neutral-400"> With the goal of accelerating project delivery and enhancing collaboration among development teams, Preline leveraged GitLab's comprehensive suite of tools and Preline's expertise in digital product development.</p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-[#ff0] pb-1 border-b-2 border-neutral-700 group-hover:border-[#ff0] transition focus:outline-none group-focus:border-[#ff0]">
                Case study
              </span>
            </p>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Card Grid -->

      </div>
    </div>
    <!-- End Case Stories -->

    <!-- Testimonials -->
    <div class="bg-neutral-900">
      <div class="max-w-5xl px-4 py-10 mx-auto xl:px-0 lg:py-20">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-2xl font-semibold text-white md:text-4xl md:leading-tight">Preline reviews</h2>
          <p class="mt-1 text-neutral-400">With over 30 awards, and achievements, we proudly demonstrate our unwavering dedication to excellence and client success.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:gap-10 lg:gap-16 md:items-center">
          <div>
            <!-- Blockquote -->
            <blockquote>
              <p class="text-xl font-medium text-white md:text-2xl md:leading-normal xl:text-3xl xl:leading-normal">
                To say that switching to Preline has been life-changing is an understatement. My business has tripled since then.
              </p>

              <footer class="mt-6">
                <div class="flex items-center">
                  <div class="flex-shrink-0 md:hidden">
                    <img class="rounded-full size-12" src="https://images.unsplash.com/photo-1671725501928-b7d85698ccd8?q=80&w=320&h=320&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
                  </div>
                  <div class="ms-4 md:ms-0">
                    <div class="text-base font-semibold text-white">Nicole Grazioso</div>
                    <div class="text-xs text-neutral-400">Director Payments & Risk | Airbnb</div>
                  </div>
                </div>
              </footer>
            </blockquote>
            <!-- End Blockquote -->
          </div>
          <!-- End Col -->

          <div class="hidden mb-24 md:block md:mb-0">
            <img class="rounded-xl" src="https://images.unsplash.com/photo-1671725501928-b7d85698ccd8?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Stats -->
    <div class="bg-neutral-900">
      <div class="max-w-5xl px-4 py-10 mx-auto xl:px-0">
        <div class="border border-neutral-800 rounded-xl">
          <div class="p-4 lg:p-8 bg-gradient-to-bl from-neutral-800 via-neutral-900 to-neutral-950 rounded-xl">
            <div class="grid items-center grid-cols-1 sm:grid-cols-3 gap-y-20 gap-x-12">
              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <svg class="flex-shrink-0 size-6 sm:size-8 text-[#ff0] mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                  <path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                  <path d="m21 3 1 11h-2" />
                  <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                  <path d="M3 4h8" />
                </svg>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg font-semibold text-white sm:text-3xl">2,000+</h3>
                  <p class="mt-1 text-sm sm:text-base text-neutral-400">Preline partners</p>
                </div>
              </div>
              <!-- End Stats -->

              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <div class="flex items-center justify-center -space-x-5">
                  <img class="relative z-[2] flex-shrink-0 size-8 rounded-full border-[3px] border-neutral-800" src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                  <img class="relative z-[1] flex-shrink-0 size-8 rounded-full border-[3px] border-neutral-800 -mt-7" src="https://images.unsplash.com/photo-1570654639102-bdd95efeca7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                  <img class="relative flex-shrink-0 size-8 rounded-full border-[3px] border-neutral-800" src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2.5&amp;w=320&amp;h=320&amp;q=80" alt="Image Description">
                </div>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg font-semibold text-white sm:text-3xl">85%</h3>
                  <p class="mt-1 text-sm sm:text-base text-neutral-400">Happy customers</p>
                </div>
              </div>
              <!-- End Stats -->

              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <svg class="flex-shrink-0 size-6 sm:size-8 text-[#ff0] mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17" />
                  <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9" />
                  <path d="m2 16 6 6" />
                  <circle cx="16" cy="9" r="2.9" />
                  <circle cx="6" cy="5" r="3" />
                </svg>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg font-semibold text-white sm:text-3xl">$55M+</h3>
                  <p class="mt-1 text-sm sm:text-base text-neutral-400">Ads managed yearly</p>
                </div>
              </div>
              <!-- End Stats -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Stats -->

    <!-- Approach -->
    <div class="bg-neutral-900">
      <!-- Approach -->
      <div class="max-w-5xl px-4 py-10 mx-auto xl:px-0 lg:pt-20">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-2xl font-semibold text-white md:text-4xl md:leading-tight">Our approach</h2>
          <p class="mt-1 text-neutral-400">This profound insight guides our comprehensive strategy — from meticulous research and strategic planning to the seamless execution of brand development and website or product deployment.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:gap-16 lg:items-center">
          <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
            <img class="object-cover w-full rounded-xl" src="https://images.unsplash.com/photo-1587614203976-365c74645e83?q=80&w=480&h=600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
          </div>
          <!-- End Col -->

          <!-- Timeline -->
          <div>
            <!-- Heading -->
            <div class="mb-4">
              <h3 class="text-xs font-medium uppercase text-[#ff0]">
                Steps
              </h3>
            </div>
            <!-- End Heading -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                <div class="relative z-10 flex items-center justify-center size-8">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-neutral-800 text-[#ff0] font-semibold text-xs uppercase rounded-full">
                    1
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm lg:text-base text-neutral-400">
                  <span class="text-white">Market Research and Analysis:</span>
                  Identify your target audience and understand their needs, preferences, and behaviors.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                <div class="relative z-10 flex items-center justify-center size-8">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-neutral-800 text-[#ff0] font-semibold text-xs uppercase rounded-full">
                    2
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm lg:text-base text-neutral-400">
                  <span class="text-white">Product Development and Testing:</span>
                  Develop digital products or services that address the needs and preferences of your target audience.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                <div class="relative z-10 flex items-center justify-center size-8">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-neutral-800 text-[#ff0] font-semibold text-xs uppercase rounded-full">
                    3
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm md:text-base text-neutral-400">
                  <span class="text-white">Marketing and Promotion:</span>
                  Develop a comprehensive marketing strategy to promote your digital products or services.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                <div class="relative z-10 flex items-center justify-center size-8">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-neutral-800 text-[#ff0] font-semibold text-xs uppercase rounded-full">
                    4
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm md:text-base text-neutral-400">
                  <span class="text-white">Launch and Optimization:</span>
                  Launch your digital products or services to the market, closely monitoring their performance and user feedback.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                <path class="transition opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100" d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                <path class="transition opacity-0 group-hover:opacity-100 group-focus:opacity-100" d="M14.05 6A5 5 0 0 1 18 10"></path>
              </svg>
              Schedule a call
            </a>
          </div>
          <!-- End Timeline -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Approach -->

    <!-- Contact -->
    <div class="bg-neutral-900">
      <div class="max-w-5xl px-4 py-10 mx-auto xl:px-0 lg:py-20">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-2xl font-semibold text-white md:text-4xl md:leading-tight">Contact us</h2>
          <p class="mt-1 text-neutral-400">Whatever your goal - we will get you there.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16">
          <div class="pb-10 mb-10 border-b md:order-2 border-neutral-800 md:border-b-0 md:pb-0 md:mb-0">
            <form>
              <div class="space-y-4">
                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-name" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="Name">
                  <label for="hs-tac-input-name" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-neutral-400
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-neutral-400">Name</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="email" id="hs-tac-input-email" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="Email">
                  <label for="hs-tac-input-email" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-neutral-400
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-neutral-400">Email</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-company" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="Company">
                  <label for="hs-tac-input-company" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-neutral-400
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-neutral-400">Company</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-phone" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="Phone">
                  <label for="hs-tac-input-phone" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-neutral-400
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-neutral-400">Phone</label>
                </div>
                <!-- End Input -->

                <!-- Textarea -->
                <div class="relative">
                  <textarea id="hs-tac-message" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="This is a textarea placeholder"></textarea>
                  <label for="hs-tac-message" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-neutral-400
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-neutral-400">Tell us about your project</label>
                </div>
                <!-- End Textarea -->
              </div>

              <div class="mt-2">
                <p class="text-xs text-neutral-500">
                  All fields are required
                </p>

                <p class="mt-5">
                  <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none" href="#">
                    Submit
                    <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5 group-hover:translate-x-0 group-focus:translate-x-0.5 group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
                  </a>
                </p>
              </div>
            </form>
          </div>
          <!-- End Col -->

          <div class="space-y-14">
            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              <div class="grow">
                <h4 class="font-semibold text-white">Our address:</h4>

                <address class="mt-1 text-sm not-italic text-neutral-400">
                  300 Bath Street, Tay House<br>
                  Glasgow G2 4JR, United Kingdom
                </address>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
              </svg>
              <div class="grow">
                <h4 class="font-semibold text-white">Email us:</h4>

                <a class="mt-1 text-sm text-neutral-400" href="#mailto:example@site.co" target="_blank">
                  hello@example.so
                </a>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 11 18-5v12L3 14v-3z" />
                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
              </svg>
              <div class="grow">
                <h4 class="font-semibold text-white">We're hiring</h4>
                <p class="mt-1 text-neutral-400">We're thrilled to announce that we're expanding our team and looking for talented individuals like you to join us.</p>
                <p class="mt-2">
                  <a class="group inline-flex items-center gap-x-2 font-medium text-sm text-[#ff0] decoration-2 hover:underline focus:outline-none focus:underline" href="#">
                    Job openings
                    <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5 group-hover:translate-x-0 group-focus:translate-x-0.5 group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
                  </a>
                </p>
              </div>
            </div>
            <!-- End Item -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Contact -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="relative overflow-hidden bg-neutral-900">
    <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-neutral-700/50" stroke="currentColor" />
      <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-neutral-700/50" stroke="currentColor" />
    </svg>

    <div class="relative z-10">
      <div class="w-full max-w-5xl px-4 py-10 mx-auto xl:px-0 lg:pt-16">
        <div class="inline-flex items-center">
          <!-- Logo -->
          <svg class="w-24 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-white" fill="currentColor" />
            <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-white" stroke="currentColor" stroke-width="2" />
            <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-white" stroke="currentColor" stroke-width="2" />
            <circle cx="13" cy="16.5214" r="5" class="fill-white" fill="currentColor" />
          </svg>
          <!-- End Logo -->

          <div class="border-s border-neutral-700 ps-5 ms-5">
            <p class="text-sm text-neutral-400">2024 Preline Co.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <div class="fixed bottom-2 sm:bottom-4 end-2 sm:end-4 ms-2 z-[70] bg-neutral-900 border border-neutral-800 rounded-lg dark:bg-neutral-800">
    <!-- Button Group -->
    <div class="flex items-center gap-px">
      <p class="inline-flex gap-x-2 text-xs text-white py-1 px-2 relative before:absolute before:top-1/2 before:-start-0.5 before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 16v-4" />
          <path d="M12 8h.01" />
        </svg>
        This is the Preline UI template preview mode.
      </p>

      <!-- Templates Dropdown -->
      <div class="hs-dropdown relative inline-flex [--strategy:absolute] [--placement:bottom-right] before:absolute before:top-1/2 before:-start-px before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
        <button type="button" class="hs-dropdown-toggle py-2.5 sm:py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-xs rounded-e-lg border border-transparent bg-neutral-900 text-white hover:bg-neutral-950 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-900 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
          Templates
          <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
          </svg>
        </button>

        <!-- Dropdown -->
        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-48 transition-[opacity,margin] duration opacity-0 hidden z-10 border border-neutral-800 bg-neutral-900 rounded-lg shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:bg-neutral-800 dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)]">
          <div class="p-1 space-y-0.5">
            <span class="block p-2 pb-1 text-[11px] uppercase text-gray-400 dark:text-neutral-400">Main Pages</span>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../index.html">
              Preline UI
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../docs/index.html">
              Components (570+)
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../examples.html">
              Examples (185+)
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../templates.html">
              Templates (2)
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../plugins.html">
              Plugins (19)
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../figma.html">
              Figma
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../pro/index.html">
              Preline Pro
              <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>

            <div class="pt-1 border-b border-gray-800 dark:border-neutral-700"></div>
            <span class="block p-2 pb-1 text-[11px] uppercase text-gray-400 dark:text-neutral-400">Template Previews</span>

            <div class="space-y-0.5 max-h-96 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-neutral-800 [&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
              <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 active-link bg-neutral-800 dark:bg-neutral-700" href="../../templates/agency/index.html">
                Agency
                <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14" />
                  <path d="m12 5 7 7-7 7" />
                </svg>
              </a>
              <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 " href="../../templates/creative-agency/index.html">
                Creative Agency
                <svg class="flex-shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14" />
                  <path d="m12 5 7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- End Dropdown -->
      </div>
      <!-- End Templates Dropdown -->
    </div>
    <!-- End Button Group -->
  </div>

  <!-- JS Implementing Plugins -->

  <!-- JS PLUGINS -->
  <!-- Required plugins -->

  <!-- JS INITIALIZATIONS -->
  <script>
    (function () {
      function textareaAutoHeight(el, offsetTop = 0) {
        el.style.height = 'auto';
        el.style.height = `${el.scrollHeight + offsetTop}px`;
      }

      (function () {
        const textareas = [
          '#hs-tac-message'
        ];

        textareas.forEach((el) => {
          const textarea = document.querySelector(el);
          const overlay = textarea.closest('.hs-overlay');

          if (overlay) {
            const { element } = HSOverlay.getInstance(overlay, true);

            element.on('open', () => textareaAutoHeight(textarea, 3));
          } else textareaAutoHeight(textarea, 3);

          textarea.addEventListener('input', () => {
            textareaAutoHeight(textarea, 3);
          });
        });
      })();
    })()
  </script>
</body>
</html>