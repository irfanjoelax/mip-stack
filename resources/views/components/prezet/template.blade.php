<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" />
    <x-prezet.meta />

    <link rel="shortcut icon" href="{{ asset('images/logo.svg') }}" type="image/x-icon">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.3.3/src/lite-yt-embed.min.js"></script>
    <script defer src="https://unpkg.com/@benbjurstrom/alpinejs-zoomable@0.4.0/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.14.1/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    @vite(['resources/css/prezet.css'])
    @stack('jsonld')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        <x-prezet.alpine>
            <x-prezet.header />
            <div class="max-w-8xl relative mx-auto flex w-full flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
                {{-- Left Sidebar --}}
                @if (isset($left))
                    {{ $left }}
                @endif

                {{-- Main Content --}}
                <main class="max-w-2xl min-w-0 flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                    {{ $slot }}
                </main>

                {{-- Right Sidebar --}}
                @if (isset($right))
                    {{ $right }}
                @endif
            </div>
        </x-prezet.alpine>
    </div>
</body>

</html>
