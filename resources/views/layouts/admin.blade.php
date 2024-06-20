<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>Document</title>
</head>

<body class="bg-[#FBFADA] min-h-[100vh]">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.min.js"></script>
    <header>
        <div class="navbar flex w-full justify-between">
            <div class="w-[30%] bg-[#1A4D2E] p-2 rounded-lg ml-5 mt-3 ">
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
                    <div class="flex ml-5">
                        <img src="/image/lg-profil.png" class="w-[30px] h-[30px]" alt="">
                        <p class="text-black font-semibold pl-1.5">Halo, Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-10">
        <div class="flex">
            <div class="flex-initial w-[200px] h-[290px] bg-[#898989] rounded-lg text-white ml-7 mr-">
                <a href="{{route('admin')}}" class="flex flex-wrap border-b border-white mt-5 mx-5 ">
                    <span class="w-full text-xl p-0">Dashboard</span>
                </a>
                <a href="{{route('daftar')}}" class="flex flex-wrap border-b border-white mt-5 mx-5 ">
                    <span class="w-full text-xl p-0">Pendaftaran</span>
                </a>
                <a href="{{route('master')}}" class="flex flex-wrap border-b border-white mt-5 mx-5 ">
                    <span class="w-full text-xl p-0">Master</span>
                </a>
                {{-- <a href="{{route ('user-baru')}}" class="flex flex-wrap border-b border-white mt-5 mx-5">
                    <span class="w-full text-xl p-0">Input User Baru</span>
                </a>
                <a href="{{route ('jadwal-baru')}}" class="flex flex-wrap border-b border-white mt-5 mx-5">
                    <span class="w-full text-xl p-0">Input Jadwal</span>
                </a>
                <a href="{{route ('admin-vaksin')}}" class="flex flex-wrap border-b border-white my-5 mx-5">
                    <span class="w-full text-xl p-0">Vaksin</span>
                </a> --}}
            </div>
            @yield('konten')
        </div>
    </main>
</body>

</html>
