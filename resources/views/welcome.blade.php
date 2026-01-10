<x-layouts.app>
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
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-foreground">
                    shadcn/ui, but for Laravel
                </h1>

                {{-- Subheading --}}
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
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
                    <div class="inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-card border border-border font-mono text-sm">
                        <span class="text-muted-foreground">$</span>
                        <code class="text-foreground">php-ui add button</code>
                        <button
                            @click="navigator.clipboard.writeText('php-ui add button'); copied = true; setTimeout(() => copied = false, 2000)"
                            class="p-1.5 rounded-md hover:bg-accent transition-all duration-200"
                            :class="copied ? 'text-primary' : 'text-muted-foreground'"
                            :aria-label="copied ? 'Copied to clipboard' : 'Copy to clipboard'"
                            x-data="{ copied: false }"
                        >
                            <x-lucide-check x-show="copied" class="size-4" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="scale-50 opacity-0" x-transition:enter-end="scale-100 opacity-100" />
                            <x-lucide-copy x-show="!copied" class="size-4" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Demo Section --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <x-ui.badge variant="secondary" class="mb-4">How it works</x-ui.badge>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                        One command, components in your project
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Run the command, and the component files are added directly to your Laravel project.
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    {{-- Terminal Demo --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <x-lucide-terminal class="size-4" />
                            <span>Terminal</span>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-4 font-mono text-sm">
                            <div class="text-muted-foreground">$ php-ui add button input alert</div>
                            <div class="text-green-600 mt-2">
                                ✓ Created resources/views/components/ui/button.blade.php<br>
                                ✓ Created resources/views/components/ui/input.blade.php<br>
                                ✓ Created resources/views/components/ui/alert.blade.php
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('images/demo-video.svg') }}" alt="Demo video showing PHP-UI installation" class="w-full rounded-lg border border-border shadow-lg">
                            <div class="absolute inset-0 bg-black/20 rounded-lg flex items-center justify-center">
                                <div class="bg-white/90 rounded-full p-4 shadow-lg">
                                    <x-lucide-play class="size-8 text-primary" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- File Structure --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <x-lucide-folder-tree class="size-4" />
                            <span>Your project structure</span>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-4 font-mono text-sm">
                            <div class="text-blue-600">resources/views/components/ui/</div>
                            <div class="ml-4 text-foreground">
                                ├── button.blade.php<br>
                                ├── input.blade.php<br>
                                └── alert.blade.php
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('images/ui-preview.svg') }}" alt="UI components preview" class="w-full rounded-lg border border-border shadow-lg">
                        </div>
                        <p class="text-sm text-muted-foreground">
                            Components are added to your project. Edit, customize, or delete them as needed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Code + Preview Section --}}
    <section class="border-t border-border">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <x-ui.badge variant="secondary" class="mb-4">Live Preview</x-ui.badge>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                        Clean Blade syntax
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Simple, readable components that work perfectly with Livewire.
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                    {{-- Code Side --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <x-lucide-file-code class="size-4" />
                            <span>resources/views/components/ui/button.blade.php</span>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-4 font-mono text-sm overflow-x-auto">
                            @php
                            $buttonCode = '```blade
<button {{ $attributes->merge([\'class\' => \'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-primary text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4\']) }}>
    {{ $slot }}
</button>
```';
                            @endphp
                            <pre class="text-foreground"><x-markdown-content :content="$buttonCode" :copyable="false" /></pre>
                        </div>
                    </div>

                    {{-- Preview Side --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <x-lucide-eye class="size-4" />
                            <span>Preview</span>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-8">
                            <x-ui.button>Click me</x-ui.button>
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

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
</x-layouts.app>
