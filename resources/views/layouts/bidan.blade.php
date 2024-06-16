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
                        <p class="text-black font-semibold pl-1.5">Halo, Bidan</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-10">
        <div class="flex">
            <div class="flex-initial w-[200px] h-[190px] bg-[#898989] rounded-lg text-white ml-7">
                <a href="{{route('bidan')}}" class="flex flex-wrap border-b border-white mt-5 mx-5 ">
                    <span class="w-full text-xl p-0">Dashboard</span>
                </a>
                <a href="{{route('data')}}" class="flex flex-wrap border-b border-white mt-5 mx-5">
                    <span class="w-full text-xl p-0">Input Data</span>
                </a>
            </div>
            @yield('konten')
        </div>
    </main>
</body>

</html>
