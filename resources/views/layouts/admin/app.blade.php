<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Tailwind custom config (for reference, should be in tailwind.config.js) -->
    {{-- 
    theme: {
        extend: {
            spacing: {
                'field-px': '0.875rem', // px-3.5
                'field-py': '0.625rem', // py-2.5
            },
            colors: {
                'modal-border': 'var(--gray-200)',
            },
        },
    }
    --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Meta tags -->
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Современное веб-приложение на Laravel">
</head>

<body class="font-sans antialiased text-gray-900 dark:text-gray-100 bg-gray-50 dark:bg-gray-950">
    <div class="min-h-screen flex flex-col">
        <!-- Навигация -->
        @include('layouts.admin.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $header }}
                    </h1>
                    @isset($subheader)
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        {{ $subheader }}
                    </p>
                    @endisset
                </div>
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                {{ $slot }}
            </div>
        </main>

        @include('layouts.admin.footer')
    </div>
</body>

</html>