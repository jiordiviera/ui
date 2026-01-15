<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<head>

    @include('partials.head')

</head>

<body class="min-h-screen scroll-smooth bg-background font-sans text-foreground overflow-x-hidden" x-data="{
        darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
    }" x-init="$watch('darkMode', val => {
        localStorage.setItem('darkMode', val);
        if (val) document.documentElement.classList.add('dark');
        else document.documentElement.classList.remove('dark');
    })" :class="{ 'dark': darkMode }">

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
                <div class="hidden md:flex items-center space-x-4">
                    <x-ui.button href="/docs/installation" size="sm" wire:navigate>Get Started</x-ui.button>
                    <button @click="darkMode = !darkMode" class="rounded-md p-2 hover:bg-muted transition-colors"
                        aria-label="Toggle dark mode">
                        <x-dynamic-component component="lucide-moon" x-show="!darkMode" class="size-5" />
                        <x-dynamic-component component="lucide-sun" x-show="darkMode" class="size-5" />
                    </button>
                    <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                        class="rounded-md p-2 hover:bg-muted transition-colors">
                        <x-dynamic-component component="icons.github"
                            class="size-5 text-muted-foreground hover:text-foreground" />
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <x-ui.drawer position="right" class="md:hidden">
                    <x-slot:trigger>
                        <x-ui.button icon="menu" iconOnly aria-label="Toggle mobile menu" />
                    </x-slot:trigger>

                    <x-slot:header>
                        <span class="font-bold">Navigation</span>
                    </x-slot:header>

                    <nav class="flex flex-col space-y-4 p-4">
                        <a href="/docs/installation" wire:navigate @click="close()"
                            class="text-sm font-medium text-foreground hover:text-primary transition-colors">Docs</a>
                        <a href="/docs/components" wire:navigate @click="close()"
                            class="text-sm font-medium text-foreground hover:text-primary transition-colors">Components</a>
                        <div class="flex items-center justify-between pt-4 border-t border-border">
                            <div class="flex items-center space-x-2">
                                <button @click="darkMode = !darkMode"
                                    class="flex items-center space-x-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors">
                                    <x-dynamic-component component="lucide-moon" x-show="!darkMode" class="size-5" />
                                    <x-dynamic-component component="lucide-sun" x-show="darkMode" class="size-5" />
                                    <span class="sr-only">{{ 'Dark' }} Mode</span>
                                </button>
                            </div>
                            <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                                class="text-muted-foreground hover:text-foreground transition-colors">
                                <x-dynamic-component component="icons.github" class="size-5" />
                            </a>
                        </div>
                        <x-ui.button href="/docs/installation" class="w-full justify-center" wire:navigate
                            @click="close()">Get Started</x-ui.button>
                    </nav>
                </x-ui.drawer>
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
                    class="font-medium underline underline-offset-4 hover:text-foreground transition-colors">Jiordi
                    Viera</a>.
                The source code is available on <a href="https://github.com/jiordiviera/php-ui" target="_blank"
                    class="font-medium underline underline-offset-4 hover:text-foreground transition-colors">GitHub</a>.
            </p>
        </div>
    </footer>
    @livewireScripts()
</body>

</html>
