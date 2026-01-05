<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased" x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP-UI - Shadcn for Laravel Livewire</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body class="min-h-screen scroll-smooth bg-background font-sans text-foreground">

    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-border bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
        <div class="container mx-auto flex h-14 items-center px-4 md:px-6">
            <a href="/" class="mr-6 flex items-center space-x-2 font-bold" wire:navigate>
                <span class="hidden sm:inline-block">PHP-UI</span>
            </a>
            <nav class="flex items-center space-x-6 text-sm font-medium">
                <a href="/docs/installation" wire:navigate
                    class="transition-colors hover:text-foreground/80 text-foreground/60">Docs</a>
                <a href="/docs/components" wire:navigate
                    class="transition-colors hover:text-foreground/80 text-foreground/60">Components</a>
                <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="transition-colors hover:text-foreground/80 text-foreground/60">GitHub</a>
            </nav>
            <div class="ml-auto flex items-center space-x-4">
                <button @click="darkMode = !darkMode" class="rounded-md p-2 hover:bg-input transition-colors"
                    aria-label="Toggle dark mode">
                    <x-lucide-moon x-show="!darkMode" class="size-5" />
                    <x-lucide-sun x-show="darkMode" class="size-5" />
                </button>
                <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="rounded-md p-2 hover:bg-background/60 transition-colors">
                    <x-icons.github class="size-5 text-foreground" />
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
            <p class="text-center text-sm leading-loose text-foreground/80 md:text-left">
                Built by <a href="https://jiordiviera.me" target="_blank"
                    class="font-medium underline underline-offset-4">Jiordi Viera</a>.
                The source code is available on <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="font-medium underline underline-offset-4">GitHub</a>.
            </p>
        </div>
    </footer>
    @livewireScripts()
</body>

</html>
