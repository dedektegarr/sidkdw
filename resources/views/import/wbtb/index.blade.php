@extends('layouts.main')
@section('page', 'Import Data WBTB')
{{-- @section('breadcrumbs', Breadcrumbs::render('domain')) --}}
@section('content')
    <div class="max-w-lg mx-auto">
        <form action="{{ route('import.wbtb.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size">Upload File</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="default_size" type="file" name="file">
            @error('file')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Import</button>
        </form>
    </div>
@endsection
