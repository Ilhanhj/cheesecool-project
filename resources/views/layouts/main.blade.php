<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,700;1,100;1,700&display=swap"
        rel="stylesheet">
    <title>{{ $title }}</title>
</head>
<body class="dark:bg-[#030617] font-poppins">

    @include('partials.navbar')

    <div class="">  
        @yield('container')
      </div>

</body>
</html>