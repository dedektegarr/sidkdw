@unless ($breadcrumbs->isEmpty())
    <nav class="flex items-center" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li class="inline-flex items-center">
                        <a href="{{ $breadcrumb->url }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span
                                class="-ms-[1px] text-sm font-medium text-gray-500 dark:text-gray-400">{{ $breadcrumb->title }}</span>
                        </div>
                    </li>
                @endif

                @unless ($loop->last)
                    <li class="text-gray-500">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </li>
                @endunless
            @endforeach
        </ol>
    </nav>
@endunless
