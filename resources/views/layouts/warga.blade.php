<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-[#FBFADA] min-h-[100vh]">
    <header>
        <div class="navbar flex w-full justify-between">
            <div class="w-[30%] bg-[#1A4D2E] p-2 rounded-lg ml-5 ">
                <div class="flex ">
                    <div class="mx-10">
                        <img src="/image/lg-bumil.png" class="w-[45px]" />
                    </div>
                    <div class="my-8">
                        <a class="text-3xl text-cl-olgreen text-right">E-POSYANDU</a>
                    </div>
                </div>
            </div>
            <div class="w-[70%]">
                <div class="grid grid-flow-row auto-rows-max">
                    <div class="flex ml-5 mt-10">
                        <img src="/image/lg-profil.png" class="w-[30px] h-[30px]" alt="">
                        <p class="text-[#989898] font-semibold pl-1.5">Selamat Datang, {{auth()->user()->name}}</p>
                    </div>
                    <div class="flex">
                        <ul class="menu menu-horizontal px-1 mt-1">
                            <li><a href="{{route ('warga-dashboard')}}" class="text-2xl font-semibold text-[#1A4D2E] no-underline hover:underline">Home</a></li>
                            <li><a href="{{route ('warga-pengumuman')}}" class="text-2xl font-semibold text-[#1A4D2E] no-underline hover:underline">Pengumuman</a></li>
                            <li><a href="{{route ('warga-jadwal')}}" class="text-2xl font-semibold text-[#1A4D2E] no-underline hover:underline">Jadwal</a></li>
                            <li><a href="{{route ('warga-vaksin')}}" class="text-2xl font-semibold text-[#1A4D2E] no-underline hover:underline">Vaksin</a></li>
                            <form action="{{route ('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="class="border-2 text-2xl text-cl-olgreen"">Logout</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('konten')

</body>

</html>
