<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased" x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP-UI - Shadcn for Laravel Livewire</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lexend:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body class="min-h-screen bg-white font-sans text-zinc-950 dark:bg-zinc-950 dark:text-white">

    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-zinc-200 bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 dark:border-zinc-800 dark:bg-zinc-950/95 dark:supports-[backdrop-filter]:bg-zinc-950/60">
        <div class="container mx-auto flex h-14 items-center px-4 md:px-6">
            <a href="/" class="mr-6 flex items-center space-x-2 font-bold">
                <span class="hidden sm:inline-block">PHP-UI</span>
            </a>
            <nav class="flex items-center space-x-6 text-sm font-medium">
                <a href="/docs/installation"
                    class="transition-colors hover:text-zinc-950/80 text-zinc-950/60 dark:hover:text-white/80 dark:text-white/60">Docs</a>
                <a href="/docs/components"
                    class="transition-colors hover:text-zinc-950/80 text-zinc-950/60 dark:hover:text-white/80 dark:text-white/60">Components</a>
                <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="transition-colors hover:text-zinc-950/80 text-zinc-950/60 dark:hover:text-white/80 dark:text-white/60">GitHub</a>
            </nav>
            <div class="ml-auto flex items-center space-x-4">
                <button @click="darkMode = !darkMode"
                    class="rounded-md p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors"
                    aria-label="Toggle dark mode">
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-5 text-yellow-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </button>
                <a href="https://github.com/jiordiviera/php-ui" target="_blank" class="rounded-md p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                    <x-icons.github class="size-5 fill-foreground" />
                </a>
            </div>
        </div>
    </header>

    <main class="flex-1">
        {{ $slot }}
    </main>

    <footer class="py-6 md:px-8 md:py-0">
        <div
            class="container mx-auto flex flex-col items-center justify-between gap-4 md:h-24 md:flex-row px-4 md:px-6">
            <p class="text-center text-sm leading-loose text-zinc-500 dark:text-zinc-400 md:text-left">
                Built by <a href="https://twitter.com/jiordiviera" target="_blank"
                    class="font-medium underline underline-offset-4">Jiordi Viera</a>.
                The source code is available on <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="font-medium underline underline-offset-4">GitHub</a>.
            </p>
        </div>
    </footer>
    @livewireScripts()
</body>

</html>
