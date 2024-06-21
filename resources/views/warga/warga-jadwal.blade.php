@extends('layouts.warga')

@section('konten')

<div class="w-[30%] bg-[#1A4D2E] mt-10 p-2 text-center ">
    <p class="text-white font-bold text-3xl">Jadwal</p>
</div>

<div class="w-[90%] h-full container mx-auto mt-10">
    <div class="border-2 bg-transparent border-[#1A4D2E]">
        @foreach ($posts as $post)
        <div class="bg-[#1A4D2E] m-5 p-2 rounded-lg px-5 mb-10">
            <div>
                <p class="text-white font-bold text-3xl">Jadwal Posyandu</p>
                <p class="text-white font-semibold text-m flex flex-wrap border-b border-white "></p>
                <p class="text-white font-light text-sm mt-1 mb-4 ">{{$post->tempat}}</p>
                <p class="text-white">{{$post->tanggal}}</p>
                {{-- <div class="flex align-content-end">
                    <a href="{{route ('detail-jadwal')}}" class="text-white font-semibold text-sm mt-2">Lihat Selengkapnya</a>
                </div> --}}
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection