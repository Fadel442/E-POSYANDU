@extends('layouts.admin')

@section('konten')

<div class="w-[90%] h-full container mx-5 ">
    <div class="border-2 bg-transparent border-[#1A4D2E] p-10">
        <div class="bg-[#1A4D2E] rounded-lg">
            <div class="px-10 pt-5"> 
                <p class="text-white font-bold text-xl pb-1">Akun User Baru</p>
                <p class="text-white w-full  text-m flex justify-start flex-wrap border-b border-white">E-POSYANDU</p>
                <div class="grid gap-6 mb-6 px-10">
            </div>
            <form action="{{route('admin.register')}}" method="POST">
                @csrf
                <div>
                    <input type="hidden" name="role" id="role" value="2">
                  </div>
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">NAMA LENGKAP</label><br>
                    <input type="text" placeholder="" id="name" name="name" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                </div>
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">NIK</label><br>
                    <input type="text" placeholder="" id="nik" name="nik" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                </div>
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">PASSWORD</label><br>
                    <input type="password" placeholder="" id="password" name="password" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                </div>
                <div class="container py-5 px-10 min-w-full flex flex-col items-end">
                    <button type="submit" class="text-white bg-[#4F6F52] font-medium rounded-lg  px-5 py-2.5 text-center me-2 mb-2">Confrirm</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection