@extends('layouts.main')
@section('page', 'Laporan WBTB')
{{-- @section('breadcrumbs', Breadcrumbs::render('domain')) --}}
@section('content')
    <form action="" method="GET" class="mb-4">
        <div class="flex gap-2 items-end">
            <div>
                <label for="domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domain</label>
                <select id="domain" name="domain"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Pilih domain</option>
                    @foreach ($domain as $item)
                        <option @if (request('domain') == $item->id) selected @endif value="{{ $item->id }}">
                            {{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="sebaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sebaran</label>
                <select id="sebaran" name="sebaran"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Pilih porvinsi</option>
                    @foreach ($sebaran as $item)
                        <option @if (request('sebaran') == $item) selected @endif value="{{ $item }}">
                            {{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                <select id="tahun" name="tahun"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Pilih tahun</option>
                </select>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 border border-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Filter</button>
        </div>
    </form>

    <div>
        <a href="{{ route('laporan.wbtb.export', request()->query()) }}"
            class="text-white my-4 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">

            <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                    clip-rule="evenodd" />
            </svg>
            Export
        </a>
    </div>

    <table id="default-table">
        <thead>
            <tr>
                <th>
                    <span class="flex items-center">
                        Nama Karya
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        No. Daftar
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Tahun
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Sebaran
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Domain
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Keterangan
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wbtb as $item)
                <tr>
                    <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->nama_karya }}</td>
                    <td>{{ $item->no_daftar }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->sebaran }}</td>
                    <td>{{ $item->domain->nama ?? '-' }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@push('scripts')
    <script>
        const selectTahun = document.getElementById("tahun");
        const currentYear = new Date().getFullYear();
        const params = new URLSearchParams(window.location.search);

        for (let year = 2015; year <= currentYear; year++) {
            const option = document.createElement("option");
            option.value = year;
            option.textContent = year;

            const tahun = params.get("tahun");

            if (tahun == year) {
                option.setAttribute("selected", true)
            }

            selectTahun.appendChild(option);
        }
    </script>
@endpush
