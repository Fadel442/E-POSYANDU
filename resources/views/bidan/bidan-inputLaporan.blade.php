@extends('layouts.bidan')

@section('konten')
    
<div class="w-[80%] h-full container mx-5 ">
    <div class="border-2 bg-transparent border-[#1A4D2E] h-[200px] ">
        <a href="{{route('input-bumil')}}">
            <div class="bg-[#1A4D2E] m-5 p-2 rounded-lg px-5 py-5 w-[50%]">
                <div>
                    <p class="text-white font-bold text-2xl">Ibu Hamil</p>
                </div>
            </div>
        </a>
        <a href="{{route('input-anak')}}">
            <div class="bg-[#1A4D2E] m-5 p-2 rounded-lg px-5 py-5 w-[50%]">
                <div>
                    <p class="text-white font-bold text-2xl">Anak</p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection