<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <title>PHP-UI - 50+ Beautiful Blade Components for Laravel | Open Source</title>
    <meta name="description" content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours. No npm packages, no build complexity.">
    <meta name="keywords" content="Laravel, Blade components, UI components, Tailwind CSS, Livewire, open source, PHP, web development">
    <meta name="author" content="Jiordi Viera">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="PHP-UI - 50+ Beautiful Blade Components for Laravel">
    <meta property="og:description" content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours.">
    <meta property="og:image" content="{{ url('/images/og-image.png') }}">
    <meta property="og:site_name" content="PHP-UI">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="PHP-UI - 50+ Beautiful Blade Components for Laravel">
    <meta property="twitter:description" content="Stop writing the same UI components over and over. PHP-UI provides 50+ beautifully crafted Blade components for Laravel. Copy, paste, and make them yours.">
    <meta property="twitter:image" content="{{ url('/images/og-image.png') }}">
    <meta property="twitter:creator" content="@jiordiviera">

    <!-- Structured Data -->
    <script type="application/ld+json">
    @verbatim
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "PHP-UI",
        "description": "50+ beautifully crafted Blade components for Laravel",
        "url": "{{ url('/') }}",
        "author": {
            "@type": "Person",
            "name": "Jiordi Viera",
            "url": "https://jiordiviera.me"
        },
        "license": "https://opensource.org/licenses/MIT",
        "programmingLanguage": "PHP",
        "applicationCategory": "DeveloperApplication",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "keywords": "Laravel, Blade, UI components, Tailwind CSS, Livewire, open source"
    }
    @endverbatim
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Fira+Code:wght@400;500&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body class="min-h-screen scroll-smooth bg-background font-sans text-foreground" x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">

    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-border bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
        <div class="container mx-auto flex h-14 items-center px-4 md:px-6">
            <a href="/" class="mr-6 flex items-center space-x-2 font-bold" wire:navigate>
                <span class="inline-block">PHP-UI</span>
            </a>
            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="/docs/installation" wire:navigate
                    class="transition-colors hover:text-foreground text-muted-foreground">Docs</a>
                <a href="/docs/components" wire:navigate
                    class="transition-colors hover:text-foreground text-muted-foreground">Components</a>
            </nav>
            <div class="ml-auto flex items-center space-x-4">
                <button @click="darkMode = !darkMode" class="rounded-md p-2 hover:bg-muted transition-colors"
                    aria-label="Toggle dark mode">
                    <x-dynamic-component component="lucide-moon" x-show="!darkMode" class="size-5" />
                    <x-dynamic-component component="lucide-sun" x-show="darkMode" class="size-5" />
                </button>
                <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="rounded-md p-2 hover:bg-muted transition-colors">
                    <x-dynamic-component component="icons.github" class="size-5 text-muted-foreground hover:text-foreground" />
                </a>
            </div>
        </div>
    </header>

    <main class="flex-1">
        {{ $slot }}
    </main>

    <footer class="border-t border-border py-6 md:px-8 md:py-0">
        <div
            class="container mx-auto flex flex-col items-center justify-between gap-4 md:h-24 md:flex-row px-4 md:px-6">
            <p class="text-center text-sm leading-loose text-muted-foreground md:text-left">
                Built by <a href="https://jiordiviera.me" target="_blank"
                    class="font-medium underline underline-offset-4 hover:text-foreground transition-colors">Jiordi Viera</a>.
                The source code is available on <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="font-medium underline underline-offset-4 hover:text-foreground transition-colors">GitHub</a>.
            </p>
        </div>
    </footer>
    @livewireScripts()
</body>

</html>
