@extends('layouts.warga')

@section('konten')
    
<div class="w-[30%] bg-[#1A4D2E] mt-10 p-2 text-center ">
    <p class="text-white font-bold text-3xl">Riwayat Pemeriksaan</p>
</div>

<div class="w-[90%] h-full container mx-auto mt-10">
    <div class="border-2 bg-transparent border-[#1A4D2E] h-auto">
        <div class="overflow-x-auto mx-4 mt-4">
            {{-- Controller mengembalikan type --}}
            @if ($type == 'anak')
            <table class="table text-center text-black">
                <!-- head -->
                <thead>
                  <tr class="bg-[#1A4D2E] text-white">
                    <th>Nama Lengkap</th>
                    <th>Nama Ibu</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>L/P</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Gizi</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            @else
            <table class="table text-center text-black">
                <!-- head -->
                <thead>
                  <tr class="bg-[#1A4D2E] text-white">
                    <th>Nama Ibu</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Umur Kehamilan</th>
                    <th>Tablet Darah</th>
                    <th>Butir</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <!-- row 2 -->
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            @endif
            
          </div>
    </div>
</div>

@endsection