<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
   {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-background to-muted/20">
        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                {{-- Announcement --}}
                <a
                    href="https://github.com/jiordiviera/php-ui/releases"
                    target="_blank"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-border bg-card/50 backdrop-blur-sm text-sm font-medium hover:bg-accent transition-colors"
                >
                    <span class="relative flex h-2 w-2">
                        <span class="motion-safe:animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    PHP-UI v1.0 is here
                    <x-lucide-arrow-right class="size-4" />
                </a>

                {{-- Main Heading --}}
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-foreground">
                    shadcn/ui, but for Laravel
                </h1>

                {{-- Subheading --}}
                <p class="text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                    Add beautiful, accessible components to your Laravel project with a single command.
                    The code is copied directly to your repository - no vendor lock-in, full ownership.
                </p>

                {{-- CTA Button --}}
                <div class="pt-4">
                    <x-ui.button href="/docs/installation" size="lg" class="shadow-lg shadow-primary/25 gap-2">
                        <x-lucide-rocket class="size-5" />
                        Get Started
                    </x-ui.button>
                </div>

                {{-- Command Example --}}
                <div class="pt-6">
                    <div class="inline-flex items-center gap-2 sm:gap-3 px-3 sm:px-5 py-2 sm:py-3 rounded-lg sm:rounded-xl bg-card border border-border font-mono text-xs sm:text-sm max-w-full overflow-x-auto">
                        <span class="text-muted-foreground flex-shrink-0">$</span>
                        <code class="text-foreground min-w-0">php-ui add button</code>
                        <button
                            @click="navigator.clipboard.writeText('php-ui add button'); copied = true; setTimeout(() => copied = false, 2000)"
                            class="p-1.5 rounded-md hover:bg-accent transition-all duration-200 flex-shrink-0"
                            :class="copied ? 'text-primary' : 'text-muted-foreground'"
                            :aria-label="copied ? 'Copied to clipboard' : 'Copy to clipboard'"
                            x-data="{ copied: false }"
                        >
                            <x-lucide-check x-show="copied" class="size-3 sm:size-4" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="scale-50 opacity-0" x-transition:enter-end="scale-100 opacity-100" />
                            <x-lucide-copy x-show="!copied" class="size-3 sm:size-4" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- How it works Section --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <x-ui.badge variant="secondary" class="mb-4">How it works</x-ui.badge>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                        Get started in 3 steps
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Install once, use forever. No configuration needed.
                    </p>
                </div>

                <div class="space-y-6 sm:space-y-8">
                    {{-- Step 1: Install --}}
                    <div class="flex items-start gap-4 sm:gap-6">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-semibold">
                            1
                        </div>
                        <div class="flex-1 space-y-3">
                            <h3 class="font-semibold text-foreground">Install PHP-UI globally</h3>
                            @php
                            $installCode = '```bash
composer global require jiordiviera/php-ui
```';
                            @endphp
<div class="bg-card border border-border rounded-lg px-3 sm:px-4 py-2 sm:py-3">
                                    <div class="overflow-x-auto -mx-3 sm:mx-0">
                                        <div class="px-3 sm:px-0">
                                            <x-markdown-content :content="$installCode" :copyable="false" />
                                        </div>
                                    </div>
                                </div>
                            <p class="text-sm text-muted-foreground">
                                One-time installation. Available in all your Laravel projects.
                            </p>
                        </div>
                    </div>

                    {{-- Step 2: Add components --}}
                    <div class="flex items-start gap-4 sm:gap-6">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-semibold">
                            2
                        </div>
                        <div class="flex-1 space-y-3">
                            <h3 class="font-semibold text-foreground">Add components to your project</h3>
                            @php
                            $addCode = '```bash
php-ui add button input alert
```';
                            @endphp
<div class="bg-card border border-border rounded-lg px-3 sm:px-4 py-2 sm:py-3">
                                    <div class="overflow-x-auto -mx-3 sm:mx-0">
                                        <div class="px-3 sm:px-0">
                                            <x-markdown-content :content="$addCode" :copyable="false" />
                                        </div>
                                    </div>
                                </div>
                            <p class="text-sm text-muted-foreground">
                                Components are copied directly to your Laravel project.
                            </p>
                        </div>
                    </div>

                    {{-- Step 3: Use --}}
                    <div class="flex items-start gap-4 sm:gap-6">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-semibold">
                            3
                        </div>
                        <div class="flex-1 space-y-3">
                            <h3 class="font-semibold text-foreground">Use in your Blade views</h3>
                            @php
                            $useCode = '```blade
<x-ui.button>Click me</x-ui.button>
```';
                            @endphp
<div class="bg-card border border-border rounded-lg px-3 sm:px-4 py-2 sm:py-3">
                                    <div class="overflow-x-auto -mx-3 sm:mx-0">
                                        <div class="px-3 sm:px-0">
                                            <x-markdown-content :content="$useCode" :copyable="false" />
                                        </div>
                                    </div>
                                </div>
                            <p class="text-sm text-muted-foreground">
                                Edit, customize, or delete components as needed. Full control.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <x-ui.button href="/docs/installation" variant="outline" class="gap-2">
                        <x-lucide-book-open class="size-4" />
                        Detailed installation guide
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- Live Preview Section --}}
    <section class="border-t border-border">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <x-ui.badge variant="secondary" class="mb-4">Live Preview</x-ui.badge>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                        Simple syntax, beautiful results
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Clean Blade components that work perfectly with Livewire.
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-4 lg:gap-8 items-center">
                    {{-- Code --}}
                    <div>
                        <div class="bg-card border border-border rounded-lg p-3 sm:p-4 md:p-6">
                            <div class="overflow-x-auto -mx-3 sm:-mx-4 md:-mx-6">
                                <div class="px-3 sm:px-4 md:px-6">
                                    @php
                                    $code = '```blade
<x-ui.button>Get Started</x-ui.button>
<x-ui.button variant="outline">Learn More</x-ui.button>
```';
                                    @endphp
                                    <x-markdown-content :content="$code" :copyable="false" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Preview --}}
                    <div>
                        <div class="bg-card border border-border rounded-lg p-6 sm:p-8">
                            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                                <x-ui.button>Get Started</x-ui.button>
                                <x-ui.button variant="outline">Learn More</x-ui.button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Components Showcase --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <x-ui.badge variant="secondary" class="mb-4">Components</x-ui.badge>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                        Ready to use components
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Beautiful, accessible components built with Tailwind CSS.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    {{-- Button --}}
                    <a href="/docs/components/button" class="group block p-6 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                        <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <x-lucide-mouse-pointer-click class="size-6 text-primary" />
                        </div>
                        <h3 class="font-semibold text-foreground mb-2">Button</h3>
                        <p class="text-sm text-muted-foreground">Interactive buttons with multiple variants</p>
                    </a>

                    {{-- Input --}}
                    <a href="/docs/components/input" class="group block p-6 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                        <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <x-lucide-text-cursor-input class="size-6 text-primary" />
                        </div>
                        <h3 class="font-semibold text-foreground mb-2">Input</h3>
                        <p class="text-sm text-muted-foreground">Form inputs with validation states</p>
                    </a>

                    {{-- Alert --}}
                    <a href="/docs/components/alert" class="group block p-6 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                        <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <x-lucide-bell class="size-6 text-primary" />
                        </div>
                        <h3 class="font-semibold text-foreground mb-2">Alert</h3>
                        <p class="text-sm text-muted-foreground">Notifications and status messages</p>
                    </a>

                    {{-- Badge --}}
                    <a href="/docs/components/badge" class="group block p-6 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                        <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                            <x-lucide-tag class="size-6 text-primary" />
                        </div>
                        <h3 class="font-semibold text-foreground mb-2">Badge</h3>
                        <p class="text-sm text-muted-foreground">Status indicators and labels</p>
                    </a>
                </div>

                <div class="text-center mt-12">
                    <x-ui.button href="/docs/components" variant="outline" class="gap-2">
                        <x-lucide-layout-grid class="size-4" />
                        View all components
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- TALL Stack Section --}}
    <section class="border-t border-border">
        <div class="container mx-auto px-4 py-16">
            <div class="text-center">
                <p class="text-sm text-muted-foreground uppercase tracking-wider font-medium mb-8">Built for the TALL stack</p>
                <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16">
                    <div class="flex items-center gap-2 text-foreground">
                        <x-dynamic-component component="icons.laravel" class="size-8" />
                        <span class="font-semibold">Laravel</span>
                    </div>
                    <div class="flex items-center gap-2 text-foreground">
                        <x-dynamic-component component="icons.livewire" class="size-8" />
                        <span class="font-semibold">Livewire</span>
                    </div>
                    <div class="flex items-center gap-2 text-foreground">
                        <x-dynamic-component component="icons.alpinejs" class="size-8" />
                        <span class="font-semibold">Alpine.js</span>
                    </div>
                    <div class="flex items-center gap-2 text-foreground">
                        <x-dynamic-component component="icons.tailwind" class="size-8" />
                        <span class="font-semibold">Tailwind CSS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-24 lg:py-32">
            <div class="max-w-3xl mx-auto text-center space-y-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-foreground">
                    Start building today
                </h2>
                <p class="text-lg text-muted-foreground max-w-xl mx-auto">
                    PHP-UI is free and open source. Add components to your Laravel project in seconds.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-ui.button href="/docs/installation" size="lg" class="shadow-lg shadow-primary/25 gap-2">
                        <x-lucide-rocket class="size-5" />
                        Get Started Free
                    </x-ui.button>
                    <x-ui.button href="https://github.com/jiordiviera/php-ui" target="_blank" variant="outline" size="lg" class="gap-2">
                        <x-dynamic-component component="icons.github" class="size-5" />
                        View on GitHub
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>
</div>
