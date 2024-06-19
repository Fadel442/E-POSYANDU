@extends('layouts.guest')

@section('title', 'Sign In')

@section('konten')
    <div class="flex w-full justify-between">
        <div class="flex items-start min-h-screen pl-10 w-[50%]">
            <img class="mt-60" src="/image/lg-e-posyandu.png" alt="">
            <img class="brightness-50 blur-sm " src="/image/logo-posyandu-lg.png" alt="">
        </div>
        <div class="w-[50%]">
            @if (session('error'))
                <div role="alert" class="alert alert-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif
            <form action="{{ route('loginwarga') }}" method="POST">
                @csrf
                <div class="px-32 mt-20">
                    <div class="mb-5">
                        <p class="text-black font-bold text-2xl">Sign in</p>
                    </div>
                        <div class="grid gap-6 mb-6">
                            <div>
                                <label class="text-sm font-medium text-[#333333]" for="">ID Pengguna</label><br>
                                <input type="text" placeholder="" name="userid" id="userid"
                                    class="bg-transparent border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" required/>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-[#333333]" for="">Kata Sandi</label><br>
                                <input type="password" placeholder="" name="password" id="password"
                                    class="bg-transparent border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" required/>
                                {{-- <div class="flex justify-end">
                                    <a href="" class="underline pt-2">Forget Your Password</a>
                                </div> --}}
                            </div>
                            <button type="submit" 
                                class="text-white bg-[#111111] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ">Sign
                                in</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection
