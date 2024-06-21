@extends('layouts.admin')

@section('konten')

<div class="w-[80%] h-full container mx-5 ">
    <div>
        <button class="bg-[#1A4D2E] rounded-lg px-10 p-3 mb-3 text-white" onclick="my_modal_1.showModal()">
            Tambah Data
        </button>
        <dialog id="my_modal_1" class="modal">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Tambah Data Ibu Hamil</h3>
            <hr>
            {{-- <p class="py-4">Press ESC key or click the button below to close</p> --}}
            <form action="{{route('bumil')}}" method="POST">
              @csrf
              <div>
                <input type="hidden" name="role" id="role" value="2">
              </div>
              <label class="form-control w-full">
                <div class="label">
                  <span class="label-text">Nama Lengkap</span>
                </div>
                <input type="text" name="nama" id="nama" placeholder="Type here" class="input input-bordered w-full" required/>
              </label>
              <label class="form-control w-full">
                <div class="label">
                  <span class="label-text">NIK</span>
                </div>
                <input type="text" name="nik" id="nik" placeholder="Type here" class="input input-bordered w-full" required/>
              </label>
              <label class="form-control w-full">
                <div class="label">
                  <span class="label-text">Alamat</span>
                </div>
                <input type="text" name="alamat" id="alamat" placeholder="Type here" class="input input-bordered w-full" required/>
              </label>
              <div class="flex">
                <div class="flex 1 w-[50%]">
                  <label class="form-control w-full">
                    <div class="label">
                      <span class="label-text">RT</span>
                    </div>
                    <input type="number" name="rt" id="rt" placeholder="Type here" class="input input-bordered w-full" required/>
                  </label>
                </div>
                <div class="w-5"></div>
                <div class="flex 1 w-[50%]">
                  <label class="form-control w-full">
                    <div class="label">
                      <span class="label-text">RW</span>
                    </div>
                    <input type="number" name="rw" id="rw" placeholder="Type here" class="input input-bordered w-full" required/>
                  </label>
                </div>
              </div>
              <label class="form-control w-full">
                <div class="label">
                  <span class="label-text">User ID</span>
                </div>
                <input type="text" name="userid" id="userid" placeholder="Enam angka terakhir NIK" class="input input-bordered w-full" required/>
              </label>
              <label class="form-control w-full">
                <div class="label">
                  <span class="label-text">Password</span>
                </div>
                <input type="password" name="password" id="password" placeholder="Type here" class="input input-bordered w-full" required/>
              </label>
              <div class="modal-action">
                <button type="submit" class="btn hover:btn-success">Submit</button>
              </form>
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn hover:btn-error">Cancel</button>
              </form>
            </div>
          </div>
        </dialog>
    </div>
    <div class="border-2 bg-transparent border-[#1A4D2E] h-auto">
        <div class="overflow-x-auto mx-4 mt-4">
            <table class="table text-center text-black">
              <!-- head -->
              <thead>
                <tr class="bg-[#1A4D2E] text-white">
                  <th>Nama Ibu</th>
                  <th>Alamat</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Laporan Pemeriksaan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bumils as $bumil)
                <tr>
                  <th>{{$bumil->nama}}</th>
                  <td>{{$bumil->alamat}}</td>
                  <td>{{$bumil->rt}}</td>
                  <td>{{$bumil->rw}}</td>
                  <td>
                    <a href="{{route('laporan-bumil')}}">
                      <button class="btn btn-primary text-white">Laporan</button>
                    </a>
                  </td>
                  <td>
                      <button class="btn btn-primary text-white">Edit</button>
                      <form action="{{route('hapusbumil',$bumil->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary text-white">Delete</button>
                    </form>
                  </td>
                  {{-- <td>Quality Control Specialist</td> --}}
                </tr>
                @endforeach
                <!-- row 2 -->
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