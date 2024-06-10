@extends('layouts.admin')

@section('konten')

<div class="w-[90%] h-full container mx-auto">
    <div class="border-2 bg-transparent border-[#1A4D2E] mx-5">
        <div class="overflow-x-auto mx-4 mt-4">
            <div class="flex justify-end my-5">
                <a href="{{route('addVaksin')}}" class="bg-[#1A4D2E] rounded-lg font-semibold text-white w-[100px] mx-10 p-2 text-center justify-end">Tambah</a>
            </div>
            <table class="table text-center text-black">
              <!-- head -->
              <thead>
                <tr class="bg-[#1A4D2E] text-white">
                  <th>No</th>
                  <th>Vaksin</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                @foreach ($posts as $post)
                <tr>
                  <th>{{$post->id}}</th>
                  <td>{{$post->vaksin}}</td>
                  <td>{{$post->jumlah}}</td>
                </tr>
                @endforeach
                {{-- <tr>
                  <th>1</th>
                  <td>Cy Ganderton</td>
                  <td>Quality Control Specialist</td>
                </tr> --}}
                <!-- row 2 -->
                {{-- <tr>
                  <th>2</th>
                  <td>Hart Hagerty</td>
                  <td>Desktop Support Technician</td>
                </tr> --}}
                <!-- row 3 -->
                {{-- <tr>
                  <th>3</th>
                  <td>Brice Swyre</td>
                  <td>Tax Accountant</td>
                </tr> --}}
              </tbody>
            </table>
          </div>
    </div>
</div>

@endsection