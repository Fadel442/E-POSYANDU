@extends('layouts.admin')

@section('konten')
    <div class="w-[80%] h-full container mx-5 ">
        <div>
            <button class="bg-[#1A4D2E] rounded-lg px-10 p-3 mb-3 text-white" onclick="my_modal_1.showModal()">
                Tambah Vaksin
            </button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Tambah Vaksin</h3>
                    <hr>
                    {{-- <p class="py-4">Press ESC key or click the button below to close</p> --}}
                    <form action="{{route('vaksin')}}" method="POST">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Nama Vaksin</span>
                            </div>
                            <input type="text" name="vaksin" id="vaksin" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Jumlah</span>
                            </div>
                            <input type="number" name="jumlah" id="jumlah" placeholder="Type here" class="input input-bordered w-full" required />
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
                        <th>No</th>
                        <th>Nama Vaksin</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vaksins as $vaksin)

                    <tr>
                        <td>{{$vaksin->id}}</td>
                        <td>{{$vaksin->vaksin}}</td>
                        <td>{{$vaksin->jumlah}}</td>
                        <td>
                            <button class="btn btn-primary text-white">Edit</button>
                            <form action="{{route('hapusvaksin',$vaksin->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary text-white">Delete</button>
                            </form>
                        </td>
                        {{-- <td>Quality Control Specialist</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
