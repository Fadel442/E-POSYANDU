@extends('layouts.admin')

@section('konten')
    <div class="w-[80%] h-full container mx-5 ">
        <div>
            <button class="bg-[#1A4D2E] rounded-lg px-10 p-3 mb-3 text-white" onclick="my_modal_1.showModal()">
                Tambah Jadwal
            </button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Tambah Jadwal Posyandu</h3>
                    <hr>
                    {{-- <p class="py-4">Press ESC key or click the button below to close</p> --}}
                    <form action="{{route('jadwal')}}" method="POST">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tempat Posyandu</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" name="tempat" id="tempat" required/>
                        </label>

                        <div class="flex">
                            <div class="flex 1 w-[50%]">
                                <label class="form-control w-full">
                                    <div class="label">
                                        <span class="label-text">RT</span>
                                    </div>
                                    <input type="number" placeholder="Type here" class="input input-bordered w-full" name="rt" id="rt" required/>
                                </label>
                            </div>
                            <div class="w-5"></div>
                            <div class="flex 1 w-[50%]">
                                <label class="form-control w-full">
                                    <div class="label">
                                        <span class="label-text">RW</span>
                                    </div>
                                    <input type="number" placeholder="Type here" class="input input-bordered w-full" name="rw" id="rw" required/>
                                </label>
                            </div>
                        </div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tanggal</span>
                            </div>
                            <input type="date" placeholder="Type here" class="input input-bordered w-full" name="tanggal" id="tanggal" required/>
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
                            <th>Tempat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwals as $jadwal)
                        <tr>
                            <td>{{$jadwal->tempat}}</td>
                            <td>{{$jadwal->rt}}</td>
                            <td>{{$jadwal->rw}}</td>

                            <td>
                                {{$jadwal->tanggal}}
                            </td>
                            <td>
                                {{-- tolong benarkan layout buttonnya --}}
                                <form action="" method="post">
                                    <button class="btn btn-primary text-white">Edit</button>
                                </form>
                                <form action="{{route('hapusjadwal',$jadwal->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
