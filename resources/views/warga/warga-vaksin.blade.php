@extends('layouts.warga')

@section('konten')
    
<div class="w-[30%] bg-[#1A4D2E] mt-10 p-2 text-center ">
    <p class="text-white font-bold text-3xl">Vaksin</p>
</div>

<div class="w-[90%] h-full container mx-auto mt-10">
    <div class="border-2 bg-transparent border-[#1A4D2E]">
        <div class="overflow-x-auto mx-4 mt-4">
            <table class="table text-center text-black">
              <!-- head -->
              <thead>
                <tr class="bg-[#1A4D2E] text-white">
                  <th>No</th>
                  <th>Name</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                <tr>
                  <th>1</th>
                  <td>Cy Ganderton</td>
                  <td>Quality Control Specialist</td>
                </tr>
                <!-- row 2 -->
                <tr>
                  <th>2</th>
                  <td>Hart Hagerty</td>
                  <td>Desktop Support Technician</td>
                </tr>
                <!-- row 3 -->
                <tr>
                  <th>3</th>
                  <td>Brice Swyre</td>
                  <td>Tax Accountant</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>

@endsection