@extends('layouts.main')
@section('page', 'Tambah Cagar Budaya Provinsi')
@section('breadcrumbs', Breadcrumbs::render('bengkulu.cb-provinsi.create'))
@section('content')
    <form method="POST" action="{{ route('cb.store') }}" class="max-w-lg mx-auto">
        @csrf
        <input type="hidden" name="level" value="provinsi">
        <input type="hidden" name="status_id" value="1">

        <div class="mb-5">
            <label for="jenis_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
            <select id="jenis_id" name="jenis_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih jenis CB</option>
                @foreach ($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('jenis_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="nama_objek" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Objek</label>
            <input type="text" id="nama_objek" name="nama_objek" value="{{ old('nama_objek') }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            @error('nama_objek')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="sk_penetapan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SK
                Penetapan</label>
            <input type="text" id="sk_penetapan" name="sk_penetapan" value="{{ old('penetapan_sk') }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            @error('sk_penetapan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
            <input type="text" id="provinsi" value="Bengkulu" name="provinsi" readonly value="{{ old('provinsi') }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            @error('provinsi')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="kabupaten_kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten
                Kota</label>
            <select id="kabupaten_kota" name="kabupaten_kota"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih kabupaten kota</option>
            </select>
            @error('kabupaten_kota')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
            <select id="kecamatan" name="kecamatan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih kecamatan</option>
            </select>
            @error('kecamatan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="desa_kelurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa
                Kelurahan</label>
            <select id="desa_kelurahan" name="desa_kelurahan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih desa kelurahan</option>
                @foreach ($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('desa_kelurahan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
@push('scripts')
    <script>
        const kabupatenKota = document.getElementById("kabupaten_kota");
        const kecamatan = document.getElementById("kecamatan");
        const desaKelurahan = document.getElementById("desa_kelurahan");

        kabupatenKota.addEventListener("change", async function(e) {
            const selectedOption = e.target.options[e.target.selectedIndex];
            const id = selectedOption.getAttribute("data-id");

            const response = await fetch("https://www.emsifa.com/api-wilayah-indonesia/api/districts/" + id +
                ".json");
            const dataKecamatan = await response.json();

            kecamatan.innerHTML = "";

            for (data of dataKecamatan) {
                option = createOption(data.name, data.name, data.id)

                kecamatan.append(option);
            }
        });

        kecamatan.addEventListener("change", async function(e) {
            const selectedOption = e.target.options[e.target.selectedIndex];
            const id = selectedOption.getAttribute("data-id");

            const response = await fetch("https://www.emsifa.com/api-wilayah-indonesia/api/villages/" + id +
                ".json");
            const dataKelurahan = await response.json();

            desaKelurahan.innerHTML = "";

            for (data of dataKelurahan) {
                option = createOption(data.name, data.name, data.id)

                desaKelurahan.append(option);
            }
        });

        async function init() {
            const response = await fetch("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/17.json");
            const dataKabupatenKota = await response.json();

            for (data of dataKabupatenKota) {
                option = createOption(data.name, data.name, data.id)

                kabupatenKota.append(option);
            }
        }

        function createOption(value, text, id) {
            const option = document.createElement("option");
            option.value = value;
            option.innerText = text;
            option.setAttribute("data-id", id)

            return option;
        }

        init();
    </script>
@endpush
