<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="navbar bg-[#1A4D2E]">
        <div class="flex-1 translate-x-10">
            <img src="/image/lg-bumil.png" class="w-[54px]" />
            <a class="text-4xl text-cl-olgreen pl-10">E-POSYANDU</a>
        </div>
        <div class="flex-1 ">
            <ul class="menu menu-horizontal px-1">
                <li><a class="text-2xl text-cl-olgreen">Home</a></li>
                <li><a class="text-2xl text-cl-olgreen">Layanan Publik</a></li>
                <li>
                    <details>
                      <summary class="text-2xl text-cl-olgreen">
                        Parent
                      </summary>
                      <ul class="p-2 bg-base-100 rounded-t-none">
                        <li><a class="text-2xl">Link 1</a></li>
                        <li><a class="text-2xl">Link 2</a></li>
                      </ul>
                    </details>
                  </li>
                <li><a class="text-2xl text-cl-olgreen">Profil</a></li>

            </ul>
        </div>
    </div>

    <div class="bg-[#FBFADA] min-h-[82vh]" style="display: flex; justify-content:center; align-items:center">
        <img src="/image/logo-posyandu-lg.png" alt="" class="w-[300px]" >
    </div>
</body>

</html>
