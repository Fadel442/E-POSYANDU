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
            <form action="{{route('jadwal-baru')}}" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="text-sm font-medium text-white " for="">BULAN</label><br>
                    <select class="select select-bordered w-full max-w-xs bg-white text-black" id="bulan" name="bulan">
                        <option disabled selected>Pilih Bulan</option>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                      </select>
                </div>
                {{-- <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">BULAN</label><br>
                    <input type="text" placeholder="" id="vaksin" name="vaksin" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
                </div> --}}
                <div class="mb-2">
                    <label class="text-sm font-medium text-white" for="">TAHUN</label><br>
                    <input type="text" placeholder="" id="tahun" name="tahun" class="bg-white border border-black text-black text-sm rounded-lg  block w-full p-2.5 mt-1" />
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