<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
  <header>
    <div class="navbar bg-[#1A4D2E]">
        <div class="flex-1 translate-x-10">
            <img src="/image/lg-bumil.png" class="w-[54px]" />
            <a class="text-4xl text-cl-olgreen pl-10">E-POSYANDU</a>
        </div>
        <div class="flex-1 justify-end">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{route ('home')}}" class="text-2xl text-cl-olgreen no-underline hover:underline">Home</a></li>
                <li><a href="{{route ('alur-layanan')}}" class="text-2xl text-cl-olgreen no-underline hover:underline">Layanan Publik</a></li>
                <li class=""><a href="/login" class="border-2 text-2xl text-cl-olgreen">Sign in</a></li>
            </ul>
        </div>
    </div>
  </header>
    
    <div class="bg-[#FBFADA] min-h-[100vh]">
      {{-- <img src="/image/logo-posyandu-lg.png" alt="" class="w-[300px]" > --}}
      @yield('konten')
    </div>

</body>

</html>
