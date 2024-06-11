@extends('layouts.admin')

@section('konten')

<div class="w-[90%] h-full container mx-5 ">
    <div class="border-2 bg-transparent border-[#1A4D2E] p-10">
        <div class="bg-[#1A4D2E] rounded-lg">
            <div class="px-10 pt-5"> 
                <p class="text-white font-bold text-xl pb-1">Tambah Jadwal</p>
                <p class="text-white w-full  text-m flex justify-start flex-wrap border-b border-white">E-POSYANDU</p>
                <div class="grid gap-6 mb-6 px-10">
            </div>
            <form action="" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">Hari</label><br>
                    <input type="text" placeholder="" id="jumlah" name="jumlah" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                </div>
                <div class="relative max-w-sm mb-2">
                    <label class="text-sm font-medium text-white" for="">Tanggal</label><br>
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 mt-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                      </svg>
                    </div>
                    <input datepicker type="date" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Select date">
                  </div>
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">LOKASI</label><br>
                    <input type="text" placeholder="" id="jumlah" name="jumlah" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
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