@extends('layouts.warga')

@section('konten')

<div class="w-[30%] bg-[#1A4D2E] mt-10 p-2 rounded-lg text-center ">
    <p class="text-white font-bold text-3xl">Jadwal</p>
</div>

<div class="w-[90%] h-full container mx-auto mt-10">
    <div class="border-2 bg-transparent border-[#1A4D2E]">
        <div class="bg-[#1A4D2E] m-5 p-2 rounded-lg px-5 mb-10">
            <div>
                <p class="text-white font-bold text-3xl">Jadwal Posyandu</p>
                <p class="text-white font-semibold text-m flex flex-wrap border-b border-white ">Januari Tahun 2024</p>
                <p class="text-white font-light text-sm mt-1">DESA SUKOMANUNGGAL. KEC ABONSARI</p>
                <div class="flex align-content-end">
                    <a href="" class="text-white font-semibold text-sm mt-2">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="bg-[#1A4D2E] m-5 p-2 rounded-lg px-5 mb-10">
            <div>
                <p class="text-white font-bold text-3xl">Jadwal Posyandu</p>
                <p class="text-white font-semibold text-m flex flex-wrap border-b border-white ">Januari Tahun 2024</p>
                <p class="text-white font-light text-sm mt-1">DESA SUKOMANUNGGAL. KEC ABONSARI</p>
                <div class="flex align-content-end">
                    <a href="" class="text-white font-semibold text-sm mt-2">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        
        {{-- <div class="w-full h-full flex flex-col justify-start bg-[#1A4D2E] m-5">
            <p class="text-white font-semibold text-xl">Jadwal Posyandu</p>
            <p class="text-white font-semibold text-xl">Januari Tahun 2024</p>
        </div> --}}
       
    </div>
</div>
    
@endsection