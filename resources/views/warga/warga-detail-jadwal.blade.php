@extends('layouts.warga')

@section('konten')

<div class="w-[30%] bg-[#1A4D2E] mt-10 p-2 text-center ">
    <p class="text-white font-bold text-3xl">Jadwal</p>
</div>

<div class="w-[90%] h-full container mx-auto mt-20">
    <div class="border-2 bg-transparent border-[#1A4D2E]">
        <div class="bg-[#1A4D2E] px-5">
            <div class="flex w-full justify-between">
                <div class="mt-2">
                    <p class="text-white font-bold text-3xl">Jadwal Posyandu</p>
                </div>
                <div class="mt-2">
                    <p class="text-white font-light text-sm mt-1 text-right">DESA SUKOMANUNGGAL. KEC ABONSARI</p>
                </div>
            </div>
                <p class="text-white w-full font-semibold text-m flex justify-end flex-wrap border-b border-white">Januari Tahun 2024</p>
            
                <div class="flex w-full justify-center">
                
                        <div class="grid grid-rows-2">
                            <div class="mt-8 mx-5">
                                <p>Senin, 1 Maret 2024</p>
                                <div class="w-full bg-white p-2  rounded-lg text-center ">
                                    <p class="text-black font-bold text-3xl  ">RW 1 Gedangan</p>
                                </div>
                            </div>
                            {{-- <div class="mt-8 mx-5">
                                <p>Senin, 1 Maret 2024</p>
                                <div class="w-full bg-white p-2  rounded-lg text-center ">
                                    <p class="text-black font-bold text-3xl  ">RW 1 Gedangan</p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="w-[30%]"> --}}

                        {{-- </div>
                        <div class="grid grid-rows-2 ">
                            <div class="mt-8 mx-5">
                                <p>Senin, 1 Maret 2024</p>
                                <div class="w-full bg-white p-2  rounded-lg text-center ">
                                    <p class="text-black font-bold text-3xl  ">RW 1 Gedangan</p>
                                </div>
                            </div>
                            <div class="mt-8 mx-5 mb-10">
                                <p>Senin, 1 Maret 2024</p>
                                <div class="w-full bg-white p-2  rounded-lg text-center ">
                                    <p class="text-black font-bold text-3xl  ">RW 1 Gedangan</p>
                                </div>
                            </div>
                        </div> --}}
                
                </div>
        </div>
    </div>
</div>    
@endsection