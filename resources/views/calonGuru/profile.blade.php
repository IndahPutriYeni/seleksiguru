@extends('calonGuru.layout')
@section('title', 'Profile Calon Guru')
@section('content')

  <main class="profile-page">
    <div class="bg-slate-50">
      <div class=" absolute -mb-10 w-full container bg-green-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
          </div>
        </div>
      </div>
      <div class="px-4 md:px-10 mx-auto w-full pt-10">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-8/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-100 border-0">
              <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                  <h6 class="text-slate-700 text-xl font-bold">
                    My account
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
                <form action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          value="{{ $dataGuru->user->name }}" required />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Email
                        </label>
                        <input type="email"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          value="{{ $dataGuru->user->email }}" required />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Password Lama
                        </label>
                        <input type="password"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="current_password" />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Password Baru
                        </label>
                        <input type="text"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="password" />
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
                        <select
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="tamatan" required>
                          <option value="SMA" @if ($dataGuru->tamatan == 'SMA') selected @endif>SMA/MA/SMK</option>
                          <option value="D1" @if ($dataGuru->tamatan == 'D1') selected @endif>D1</option>
                          <option value="D2" @if ($dataGuru->tamatan == 'D2') selected @endif>D2</option>
                          <option value="D3" @if ($dataGuru->tamatan == 'D3') selected @endif>D3</option>
                          <option value="D4" @if ($dataGuru->tamatan == 'D4') selected @endif>D4</option>
                          <option value="S1" @if ($dataGuru->tamatan == 'S1') selected @endif>S1</option>
                          <option value="S2" @if ($dataGuru->tamatan == 'S2') selected @endif>S2</option>
                          <option value="S3" @if ($dataGuru->tamatan == 'S3') selected @endif>S3</option>
                        </select>
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Instansi
                        </label>
                        <input type="text"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="instansi" required value="{{ $dataGuru->instansi }}" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Tempat Lahir
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-slate-500 text-slate"
                          name="tempat_lahir" value="{{ $dataGuru->tempat_lahir }}" required />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Tanggal Lahir
                        </label>
                        <input type="date"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="tanggal_lahir" value="{{ $dataGuru->tanggal_lahir }}" required />
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-wrap">
                    <div class="w-full px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          Address
                        </label>
                        <textarea type="text" name="alamat" required
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">{{ $dataGuru->alamat }}</textarea>
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          NIK
                        </label>
                        <input type="text" name="nik"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          value="{{ $dataGuru->nik }}" required />
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          No KK
                        </label>
                        <input type="text"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          value="{{ $dataGuru->no_kk }}" name="no_kk" required />
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2">
                          No HP
                        </label>
                        <input type="text"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          value="{{ $dataGuru->no_hp }}" name="no_hp" required />
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
                        <input type="file"
                          class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          name="foto_profile" id="foto_profile" />
                      </div>
                    </div>
                  </div>
                  <button
                    class="w-full mt-8 bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    type="submit">
                    Simpan Data
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
              <div class="px-6">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full px-4 flex justify-center">
                    <img alt="..." src="{{ asset($dataGuru->foto_profile) }}"
                      class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 w-24 h-24" />
                  </div>
                </div>
                <div class="text-center my-12">
                  <h3 class="text-xl font-semibold leading-normal mb-2 text-slate-700 mb-2">
                    {{ $dataGuru->user->name }}
                  </h3>
                  <div class="text-sm leading-normal mt-0 mb-2 text-slate-600 font-bold">
                    <i class="fas fa-envelope mr-2 text-lg text-slate-600"></i>
                    {{ $dataGuru->user->email }}
                  </div>
                  <div class="text-sm leading-normal mt-0 mb-2 text-slate-600 font-bold">
                    <i class="fas fa-map-marker-alt mr-2 text-lg text-slate-600"></i>
                    {{ $dataGuru->alamat }}
                  </div>
                  <div class="mb-2 text-slate-600 mt-10">
                    <i class="fas fa-briefcase mr-2 text-lg text-slate-600"></i>
                    {{ $dataGuru->instansi }} - {{ $dataGuru->tamatan }}
                  </div>
                  <div class="mb-2 text-slate-600">
                    <i class="fas fa-id-card mr-2 text-lg text-slate-600"></i>
                    NIK : {{ $dataGuru->nik }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
