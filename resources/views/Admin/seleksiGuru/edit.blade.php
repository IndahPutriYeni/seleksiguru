@extends('Admin.layout')
@section('title', 'Tambah Guru')
@section('content')
<main class="profile-page">
    <div class="bg-slate-50">
        <div class="px-4 md:px-10 mx-auto w-full pt-10">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-100 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-slate-700 text-xl font-bold">
                                    Data Guru
                                </h6>
                            </div>
                        </div>
                        @if ($errors->all())
                        <div class="w-full bg-red-200 py-4">
                            <ul class="text-red-500 list-disc mx-8">
                                @foreach ($errors->all(':message') as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form action="{{ route('admin.seleksiGuru.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h6 class="text-slate-600 text-sm mt-3 mb-6 font-bold uppercase">
                                    User Information
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Nama
                                            </label>
                                            <input type="text" name="nama" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required />
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-slate-500" />

                                <h6 class="text-slate-600 text-sm mt-3 mb-6 font-bold uppercase">
                                    Tentang
                                </h6>
                                <div class="flex">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Tamatan
                                            </label>
                                            <select class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="tamatan" required>
                                                <option value="SMA">SMA/MA/SMK</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Instansi
                                            </label>
                                            <input type="text" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="instansi" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Tempat Lahir
                                            </label>
                                            <input type="text" class="w-full border-0 px-3 py-3 placeholder-slate-500 text-slate" name="tempat_lahir" required />
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Tanggal Lahir
                                            </label>
                                            <input type="date" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="tanggal_lahir" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Address
                                            </label>
                                            <textarea type="text" name="alamat" required class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                NIK
                                            </label>
                                            <input type="text" name="nik" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required />
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                No KK
                                            </label>
                                            <input type="text" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="no_kk" required />
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                No HP
                                            </label>
                                            <input type="text" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="no_hp" required />
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-slate-500" />

                                <h6 class="text-slate-600 text-sm mt-3 mb-6 font-bold uppercase">
                                    Foto
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="foto_profile">
                                                Foto Profile
                                            </label>
                                            <input type="file" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="foto_profile" id="foto_profile" />
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-slate-500" />

                                <h6 class="text-slate-600 text-sm mt-3 mb-6 font-bold uppercase">
                                    Status Guru
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Status
                                            </label>
                                            <select class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="status" required>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                                                Tahun Diterima
                                            </label>
                                            <input type="text" class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="tahun_diterima" required />
                                        </div>
                                    </div>
                                </div>
                                <button class="w-full mt-8 bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
                                    Simpan Data
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection