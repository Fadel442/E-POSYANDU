@extends('layouts.bidan')

@section('konten')
    <div class="w-[80%] h-full container mx-5 ">
        <div>
            <button class="bg-[#1A4D2E] rounded-lg px-10 p-3 mb-3 text-white" onclick="my_modal_1.showModal()">
                Tambah Data
            </button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Tambah Data Pemeriksaan Anak</h3>
                    <hr>
                    {{-- <p class="py-4">Press ESC key or click the button below to close</p> --}}
                    <form action="">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Nama Anak</span>
                            </div>
                            <select class="select select-bordered w-full">
                                <option disabled selected>Pilih Anak</option>
                                <option value=""></option>
                            </select>
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tanggal Pemeriksaan</span>
                            </div>
                            <input type="date" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">L/P</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Umur</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Berat Badan</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tinggi Badan</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" required />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Suhu Badan</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full" required />
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
                        <th>Nama Lengkap</th>
                        <th>Nama Ibu</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>L/P</th>
                        <th>Umur</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Suhu Badan</th>
                        <th>Aksi</th>
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
                        <td>
                            <button class="btn btn-primary text-white" onclick="my_modal_4.showModal()">Detail</button>
                            <dialog id="my_modal_4" class="modal">
                                <div class="modal-box w-11/12 max-w-5xl">
                                    <h3 class="font-bold text-lg text-white text-start">Laporan Pemeriksaan</h3>
                                    <hr>
                                    <label class="form-control w-full text-start">
                                        <div class="label">
                                            <span class="text-white">Nama Anak</span>
                                        </div>
                                        <div>
                                            <p class="text-white ml-1">....</p>
                                        </div>
                                    </label>
                                    <label class="form-control w-full text-start">
                                        <div class="label">
                                            <span class="text-white">Nama Ibu</span>
                                        </div>
                                        <div>
                                            <p class="text-white ml-1">....</p>
                                        </div>
                                    </label>
                                    <div class="flex">
                                        <div class="flex-1 w-[50%] flex flex-col">
                                            <label class="form-control w-full text-start">
                                                <div class="label">
                                                    <span class="text-white">L/P</span>
                                                </div>
                                                <div>
                                                    <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                </div>
                                            </label>
                                            <label class="form-control w-full text-start">
                                                <div class="label">
                                                    <span class="text-white">Berat Badan</span>
                                                </div>
                                                <div>
                                                    <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="w-5"></div>
                                        <div class="flex-1 w-[50%] flex flex-col">
                                            <label class="form-control w-full text-start">
                                                <div class="label">
                                                    <span class="text-white">Umur</span>
                                                </div>
                                                <div>
                                                    <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                </div>
                                            </label>
                                            <label class="form-control w-full text-start">
                                                <div class="label">
                                                    <span class="text-white">Tinggi Badan</span>
                                                </div>
                                                <div>
                                                    <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="w-5"></div>
                                        <div class="flex-1 w-[50%]">
                                            <label class="form-control w-full text-start mt-16">
                                                <div class="label">
                                                    <span class="text-white">Suhu Badan</span>
                                                </div>
                                                <div>
                                                    <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                            <button class="btn btn-primary text-white">Edit</button>
                            <button class="btn btn-primary text-white">Delete</button>
                        </td>
                        {{-- <td>Quality Control Specialist</td> --}}
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
                        <td>
                            <button class="btn btn-primary text-white">Detail</button>
                            <button class="btn btn-primary text-white">Edit</button>
                            <button class="btn btn-primary text-white">Delete</button>
                        </td>
                        {{-- <td>Desktop Support Technician</td> --}}
                    </tr>
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
