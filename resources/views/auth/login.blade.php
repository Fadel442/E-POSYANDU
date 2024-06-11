@extends('layouts.guest')

@section('konten')
    <div class="flex w-full justify-between">
        <div class="flex items-start min-h-screen pl-10 w-[50%]">
            <img class="mt-60" src="/image/lg-e-posyandu.png" alt="">
            <img class="brightness-50 blur-sm " src="/image/logo-posyandu-lg.png" alt="">
        </div>
        <div class="w-[50%]">
            <form action="{{route('user-login')}}" method="POST">
                @csrf
                <div class="px-32 mt-20">
                    <div class="mb-5">
                        <p class="text-black font-bold text-2xl">Sign in</p>
                    </div>
                    <div class="grid gap-6 mb-6">
                        <div>
                            <label class="text-sm font-medium text-[#333333]" for="">NIK</label><br>
                            <input type="text" placeholder="" name="nik" id="nik" class="bg-transparent border border-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                        </div>
                        <div>
                            <label class="text-sm font-medium text-[#333333]" for="">Password</label><br>
                            <input type="password" placeholder=""  name="password" id="password" class="bg-transparent border border-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                            <div class="flex justify-end">
                                <a href="" class="underline pt-2">Forget Your Password</a>
                            </div>
                        </div>
                        <button type="submit" class="text-white bg-[#111111] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
