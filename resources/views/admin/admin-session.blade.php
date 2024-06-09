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
                        <a href="{{route ('user-login')}}" class="bg-[#1A4D2E] rounded-lg font-semibold text-white w-[100px] mx-10 text-center">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="w-[90%] h-full container mx-auto mt-20">
        <div class="border-2 bg-transparent border-[#1A4D2E]">
            <div class="flex w-full justify-between">
                <div class="w-[50%] h-[300px] flex items-center justify-center bg-[#1A4D2E] m-5 ">
                    <p class="text-white font-semibold text-xl">Istirahat, Jaga Kesehatan</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
