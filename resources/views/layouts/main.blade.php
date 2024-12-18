<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} | @yield('page')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="mt-14 max-w-screen-xl mx-auto">
            <div class="flex items-center justify-between py-3 md:py-0 mb-4 md:mb-6 2xl:mb-8">
                <h2
                    class="text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    @yield('page')</h2>
                {{-- @yield('breadcrumbs') --}}
            </div>
            @yield('content')
        </div>
    </div>

    <script>
        const themeToggleBtn = document.getElementById("theme-toggle");
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeToggleDarkIcon.classList.add("hidden");
        } else {
            themeToggleLightIcon.classList.add("hidden");
            document.documentElement.classList.add('light');
        }

        themeToggleBtn.addEventListener("click", function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
