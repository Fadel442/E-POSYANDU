@extends('layouts.admin')

@section('konten')
    <div class="w-[80%] h-full container mx-5 ">

        <div class="border-2 bg-transparent border-[#1A4D2E] h-auto">
            <div class="overflow-x-auto mx-4 mt-4">
                <table class="table text-center text-black">
                    <!-- head -->
                    <thead>
                        <tr class="bg-[#1A4D2E] text-white">
                            <th>Nama Ibu</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Umur Kehamilan</th>
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
                            <td>
                                <button class="btn btn-primary text-white" onclick="my_modal_4.showModal()">Detail</button>
                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h3 class="font-bold text-lg text-white text-start">Laporan Pemeriksaan</h3>
                                        <hr>
                                        <label class="form-control w-full text-start">
                                            <div class="label">
                                                <span class="text-white">Nama Lengkap</span>
                                            </div>
                                            <div>
                                                <p class="text-white ml-1">....</p>
                                            </div>
                                        </label>
                                        <div class="flex">
                                            <div class="flex-1 w-[50%] flex flex-col">
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Berat Badan</span>
                                                    </div>
                                                    <div>
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Nadi</span>
                                                    </div>
                                                    <div>
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Lingkar Lengan Atas</span>
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
                                                        <span class="text-white">Tinggi Badan</span>
                                                    </div>
                                                    <div>
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Lingkar Perut</span>
                                                    </div>
                                                    <div>
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Tinggi Fundus Uteri</span>
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
                                                        <span class="text-white">Suhu Badan</span>
                                                    </div>
                                                    <div class="w-full">
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Tekanan Darah</span>
                                                    </div>
                                                    <div>
                                                        <p class="border-solid border-2 p-1 text-white ml-1">......</p>
                                                    </div>
                                                </label>
                                                <label class="form-control w-full text-start">
                                                    <div class="label">
                                                        <span class="text-white">Denyut Jantung Janin</span>
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
                                                <button class="btn hover:btn-error">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                                <button class="btn btn-primary text-white">Edit</button>
                                <button class="btn btn-primary text-white">Delete</button>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-primary text-white">Edit</button>
                                <button class="btn btn-primary text-white">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
