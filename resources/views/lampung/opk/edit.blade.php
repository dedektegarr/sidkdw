@extends('layouts.main')
@section('page', 'Edit OPK')
@section('breadcrumbs', Breadcrumbs::render('bengkulu.odcb.edit', $opk->id))
@section('content')
    <form method="POST" action="{{ route('wbtb.update', $opk->id) }}" class="max-w-lg mx-auto">
        @csrf
        @method('PATCH')
        <input type="hidden" name="page" value="opk">
        <div class="mb-5">
            <label for="nama_karya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Karya
                Budaya</label>
            <input type="text" id="nama_karya" name="nama_karya" value="{{ $opk->nama_karya ?? old('nama_karya') }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            @error('nama_karya')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
            <select id="tahun" name="tahun"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih tahun</option>

            </select>
            @error('tahun')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="sebaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sebaran</label>
            <select id="sebaran" name="sebaran"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih sebaran</option>
                <option @if ($opk->sebaran === 'Bengkulu') selected @endif value="Bengkulu">Bengkulu</option>
                <option @if ($opk->sebaran === 'Lampung') selected @endif value="Lampung">Lampung</option>
            </select>
            @error('sebaran')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="domain_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domain</label>
            <select id="domain_id" name="domain_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="">Pilih domain</option>
                @foreach ($domain as $item)
                    <option @if ($opk->domain_id === $item->id) selected @endif value="{{ $item->id }}">
                        {{ $item->nama }}</option>
                @endforeach
            </select>
            @error('domain_id')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" value="{{ $opk->keterangan ?? old('keterangan') }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required />
            @error('keterangan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
@push('scripts')
    <script>
        const selectTahun = document.getElementById("tahun");
        const currentYear = new Date().getFullYear();

        for (let year = 2015; year <= currentYear; year++) {
            const option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            selectTahun.appendChild(option);
        }
    </script>
@endpush
