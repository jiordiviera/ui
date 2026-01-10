<x-layouts.app>
    {{-- Hero Section with Gradient Background --}}
    <section class="relative overflow-hidden" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)">
        {{-- Background Effects --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse [animation-delay:1s]"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,transparent_0%,transparent_49%,var(--color-border)_50%,transparent_51%,transparent_100%)] bg-[size:80px_100%] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="max-w-5xl mx-auto text-center space-y-8">
                {{-- Announcement --}}
                <a
                    href="https://github.com/jiordiviera/php-ui/releases"
                    target="_blank"
                    class="inline-flex transition-all duration-700"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-4'"
                >
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-border bg-card/50 backdrop-blur-sm text-sm font-medium hover:bg-accent hover:scale-105 transition-all duration-300">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        PHP-UI v1.0 is here
                        <x-lucide-arrow-right class="size-4" />
                    </span>
                </a>

                {{-- Main Heading --}}
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-foreground transition-all duration-700 delay-100"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    Stop writing the same
                    <span class="relative">
                        <span class="relative z-10 bg-gradient-to-r from-primary to-primary/70 bg-clip-text text-transparent">UI components</span>
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-primary/30" viewBox="0 0 200 12" preserveAspectRatio="none">
                            <path d="M0,6 Q50,0 100,6 T200,6" fill="none" stroke="currentColor" stroke-width="3"/>
                        </svg>
                    </span>
                    <br class="hidden md:block" />over and over again.
                </h1>

                {{-- Subheading --}}
                <p
                    class="text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed transition-all duration-700 delay-200"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    A collection of <strong class="text-foreground">50+ beautifully crafted</strong> Blade components for Laravel.
                    Copy, paste, and make them yours. No npm packages, no build complexity.
                </p>

                {{-- CTA Buttons --}}
                <div
                    class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4 transition-all duration-700 delay-300"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <x-ui.button href="/docs/installation" size="lg" class="w-full sm:w-auto shadow-lg shadow-primary/25 gap-2 hover:scale-105 hover:shadow-xl hover:shadow-primary/30 transition-all duration-300">
                        Get Started Free
                    </x-ui.button>
                    <x-ui.button href="/docs/components/button" variant="outline" size="lg" class="w-full sm:w-auto gap-2 hover:scale-105 transition-all duration-300">
                        <x-lucide-layout-grid class="size-5" />
                        Browse Components
                    </x-ui.button>
                </div>

                {{-- Quick Install Command --}}
                <div
                    class="pt-6 transition-all duration-700 delay-[400ms]"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    x-data="{ copied: false }"
                >
                    <div class="inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-card border border-border font-mono text-sm hover:border-primary/50 transition-colors duration-300">
                        <span class="text-muted-foreground">$</span>
                        <code class="text-foreground">composer global require jiordiviera/php-ui</code>
                        <button
                            @click="navigator.clipboard.writeText('composer global require jiordiviera/php-ui'); copied = true; setTimeout(() => copied = false, 2000)"
                            class="p-1.5 rounded-md hover:bg-accent transition-all duration-200 hover:scale-110"
                            :class="copied ? 'text-primary' : 'text-muted-foreground'"
                        >
                            <x-lucide-check x-show="copied" class="size-4" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="scale-50 opacity-0" x-transition:enter-end="scale-100 opacity-100" />
                            <x-lucide-copy x-show="!copied" class="size-4" />
                        </button>
                    </div>
                </div>

                {{-- Trust Badges --}}
                <div
                    class="flex flex-wrap justify-center gap-6 pt-8 text-sm text-muted-foreground transition-all duration-700 delay-500"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <div class="flex items-center gap-2 hover:text-foreground transition-colors duration-200">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>MIT Licensed</span>
                    </div>
                    <div class="flex items-center gap-2 hover:text-foreground transition-colors duration-200">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Tailwind v3 & v4</span>
                    </div>
                    <div class="flex items-center gap-2 hover:text-foreground transition-colors duration-200">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Livewire Ready</span>
                    </div>
                    <div class="flex items-center gap-2 hover:text-foreground transition-colors duration-200">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Dark Mode</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Live Component Preview Section --}}
    <section class="border-t border-border bg-muted/30" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <x-ui.badge variant="secondary" class="mb-4">Live Preview</x-ui.badge>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                    See it in action
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Every component is designed to work perfectly together. Here's what you can build in minutes.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start max-w-6xl mx-auto">
                {{-- Code Side --}}
                <div
                    class="space-y-4 order-2 lg:order-1 transition-all duration-700 delay-200"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                >
                    <div class="flex items-center gap-2 text-sm text-muted-foreground">
                        <x-lucide-file-code class="size-4" />
                        <span>login-form.blade.php</span>
                    </div>
                    @php
                    $codeExample = <<<'CODE'
```blade
<div class="max-w-md mx-auto p-6 bg-card rounded-xl border">
    <h2 class="text-2xl font-bold mb-6">Welcome back</h2>

    <div class="space-y-4">
        <x-ui.input
            label="Email"
            type="email"
            placeholder="you@example.com"
        />

        <x-ui.input
            label="Password"
            type="password"
        />

        <x-ui.button class="w-full">
            Sign in
        </x-ui.button>
    </div>

    <x-ui.alert class="mt-4" icon="info">
        New here? Create an account
    </x-ui.alert>
</div>
```
CODE;
                    @endphp
                    <x-markdown-content :content="$codeExample" />
                    <p class="text-sm text-muted-foreground">
                        <x-lucide-sparkles class="size-4 inline mr-1" />
                        Clean, readable Blade syntax. No JavaScript framework required.
                    </p>
                </div>

                {{-- Preview Side --}}
                <div
                    class="order-1 lg:order-2 transition-all duration-700 delay-300"
                    :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                >
                    <div class="p-1 rounded-2xl bg-gradient-to-br from-primary/20 via-transparent to-primary/10 hover:from-primary/30 hover:to-primary/20 transition-all duration-500">
                        <div class="bg-card rounded-xl border border-border p-8">
                            <div class="max-w-sm mx-auto space-y-6">
                                <div class="text-center space-y-2">
                                    <div class="size-12 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <x-lucide-user class="size-6 text-primary" />
                                    </div>
                                    <h3 class="text-2xl font-bold text-card-foreground">Welcome back</h3>
                                    <p class="text-sm text-muted-foreground">Sign in to your account</p>
                                </div>
                                <div class="space-y-4">
                                    <x-ui.input label="Email" type="email" placeholder="you@example.com" />
                                    <x-ui.input label="Password" type="password" placeholder="••••••••" />
                                    <div class="flex items-center justify-between text-sm">
                                        <label class="flex items-center gap-2 text-muted-foreground">
                                            <input type="checkbox" class="rounded border-input" />
                                            Remember me
                                        </label>
                                        <a href="#" class="text-primary hover:underline">Forgot password?</a>
                                    </div>
                                    <x-ui.button class="w-full">Sign in</x-ui.button>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-0 flex items-center">
                                        <div class="w-full border-t border-border"></div>
                                    </div>
                                    <div class="relative flex justify-center text-xs uppercase">
                                        <span class="bg-card px-2 text-muted-foreground">Or continue with</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <x-ui.button variant="outline" class="gap-2">
                                        <x-dynamic-component component="icons.github" class="size-4" />
                                        GitHub
                                    </x-ui.button>
                                    <x-ui.button variant="outline" class="gap-2">
                                        <x-lucide-mail class="size-4" />
                                        Google
                                    </x-ui.button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Component Showcase Grid --}}
    <section class="border-t border-border" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <x-ui.badge variant="secondary" class="mb-4">Component Library</x-ui.badge>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                    50+ components ready to use
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    From simple buttons to complex data tables. Everything you need to build modern web applications.
                </p>
            </div>

            {{-- Component Categories --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto mb-12">
                @php
                $categories = [
                    ['name' => 'Forms', 'count' => 12, 'icon' => 'text-cursor-input', 'components' => ['Input', 'Select', 'Checkbox', 'Date Picker']],
                    ['name' => 'Display', 'count' => 15, 'icon' => 'layout-grid', 'components' => ['Card', 'Badge', 'Avatar', 'Table']],
                    ['name' => 'Feedback', 'count' => 8, 'icon' => 'message-circle', 'components' => ['Alert', 'Toast', 'Modal', 'Progress']],
                    ['name' => 'Navigation', 'count' => 10, 'icon' => 'compass', 'components' => ['Tabs', 'Breadcrumb', 'Dropdown', 'Sidebar']],
                ];
                @endphp
                @foreach($categories as $index => $category)
                <div
                    class="group p-6 rounded-xl border border-border bg-card hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300 cursor-pointer"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: {{ 100 + ($index * 100) }}ms"
                >
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <x-dynamic-component :component="'lucide-' . $category['icon']" class="size-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-card-foreground">{{ $category['name'] }}</h3>
                            <p class="text-xs text-muted-foreground">{{ $category['count'] }} components</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($category['components'] as $comp)
                        <span class="text-xs px-2 py-1 rounded-md bg-muted text-muted-foreground">{{ $comp }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Live Component Samples --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                {{-- Buttons --}}
                <div
                    class="p-6 rounded-xl border border-border bg-card space-y-4 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 500ms"
                >
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-mouse-pointer-click class="size-4 text-primary" />
                        Buttons
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button size="sm" class="hover:scale-105 transition-transform duration-200">Primary</x-ui.button>
                        <x-ui.button size="sm" variant="secondary" class="hover:scale-105 transition-transform duration-200">Secondary</x-ui.button>
                        <x-ui.button size="sm" variant="outline" class="hover:scale-105 transition-transform duration-200">Outline</x-ui.button>
                        <x-ui.button size="sm" variant="destructive" class="hover:scale-105 transition-transform duration-200">Delete</x-ui.button>
                    </div>
                </div>

                {{-- Badges --}}
                <div
                    class="p-6 rounded-xl border border-border bg-card space-y-4 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 600ms"
                >
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-tag class="size-4 text-primary" />
                        Badges
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.badge class="hover:scale-105 transition-transform duration-200">Default</x-ui.badge>
                        <x-ui.badge variant="secondary" class="hover:scale-105 transition-transform duration-200">Secondary</x-ui.badge>
                        <x-ui.badge variant="outline" class="hover:scale-105 transition-transform duration-200">Outline</x-ui.badge>
                        <x-ui.badge variant="destructive" class="hover:scale-105 transition-transform duration-200">Error</x-ui.badge>
                    </div>
                </div>

                {{-- Alerts --}}
                <div
                    class="p-6 rounded-xl border border-border bg-card space-y-4 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 700ms"
                >
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-bell class="size-4 text-primary" />
                        Alerts
                    </h4>
                    <x-ui.alert icon="info" class="text-sm">
                        This is an informational alert.
                    </x-ui.alert>
                </div>

                {{-- Input --}}
                <div
                    class="p-6 rounded-xl border border-border bg-card space-y-4 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 800ms"
                >
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-text-cursor-input class="size-4 text-primary" />
                        Inputs
                    </h4>
                    <x-ui.input placeholder="Type something..." size="sm" />
                </div>

                {{-- Avatar --}}
                <div
                    class="p-6 rounded-xl border border-border bg-card space-y-4 hover:shadow-lg hover:border-primary/30 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 900ms"
                >
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-user-circle class="size-4 text-primary" />
                        Avatars
                    </h4>
                    <div class="flex items-center gap-3">
                        <x-ui.avatar size="sm" initials="JD" class="hover:scale-110 transition-transform duration-200" />
                        <x-ui.avatar size="md" initials="AB" class="hover:scale-110 transition-transform duration-200" />
                        <x-ui.avatar size="lg" initials="XY" class="hover:scale-110 transition-transform duration-200" />
                    </div>
                </div>

                {{-- More Coming --}}
                <a
                    href="/docs/components/button"
                    class="group p-6 rounded-xl border border-dashed border-border hover:border-primary/50 bg-card/50 flex flex-col items-center justify-center gap-2 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: 1000ms"
                >
                    <div class="size-10 rounded-full bg-muted flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                        <x-lucide-plus class="size-5 text-muted-foreground group-hover:text-primary transition-colors" />
                    </div>
                    <span class="text-sm font-medium text-muted-foreground group-hover:text-primary transition-colors">View all components</span>
                </a>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section class="border-t border-border bg-muted/30" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <x-ui.badge variant="secondary" class="mb-4">Simple Setup</x-ui.badge>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                    Up and running in 3 steps
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    No complex configuration. No build tools. Just install and start building.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @php
                $steps = [
                    [
                        'step' => '01',
                        'title' => 'Install the package',
                        'description' => 'Add PHP-UI to your Laravel project with Composer.',
                        'code' => 'composer global require jiordiviera/php-ui',
                        'icon' => 'package'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Initialize your project',
                        'description' => 'Run the init command to set up your component structure.',
                        'code' => 'php-ui init',
                        'icon' => 'terminal'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Add components',
                        'description' => 'Pick the components you need. They are copied to your project.',
                        'code' => 'php-ui add button input alert',
                        'icon' => 'layers'
                    ],
                ];
                @endphp

                @foreach($steps as $index => $step)
                <div
                    class="relative transition-all duration-700"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition-delay: {{ 200 + ($index * 150) }}ms"
                >
                    {{-- Step Number --}}
                    <div class="text-7xl font-black text-primary/10 absolute -top-4 -left-2">{{ $step['step'] }}</div>
                    <div class="relative pt-8 space-y-4">
                        <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center hover:scale-110 hover:bg-primary/20 transition-all duration-300">
                            <x-dynamic-component :component="'lucide-' . $step['icon']" class="size-6 text-primary" />
                        </div>
                        <h3 class="text-xl font-bold text-foreground">{{ $step['title'] }}</h3>
                        <p class="text-muted-foreground">{{ $step['description'] }}</p>
                        <div class="font-mono text-sm bg-card border border-border rounded-lg px-4 py-3 text-foreground hover:border-primary/50 transition-colors duration-300">
                            <span class="text-muted-foreground">$</span> {{ $step['code'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why PHP-UI Section --}}
    <section class="border-t border-border" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center max-w-6xl mx-auto">
                <div class="space-y-8">
                    <div
                        class="transition-all duration-700"
                        :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    >
                        <x-ui.badge variant="secondary" class="mb-4">Why PHP-UI?</x-ui.badge>
                        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                            Built different. On purpose.
                        </h2>
                        <p class="text-lg text-muted-foreground">
                            Unlike traditional component libraries, PHP-UI gives you full ownership of your code. No abstractions, no vendor lock-in.
                        </p>
                    </div>

                    <div class="space-y-6">
                        @php
                        $benefits = [
                            [
                                'title' => 'You own every line of code',
                                'description' => 'Components are copied to your project. Modify, extend, or delete them as you wish.',
                                'icon' => 'key'
                            ],
                            [
                                'title' => 'No JavaScript framework required',
                                'description' => 'Pure Blade templates with Alpine.js for interactivity. Perfect for Livewire apps.',
                                'icon' => 'zap'
                            ],
                            [
                                'title' => 'Tailwind CSS native',
                                'description' => 'Built with Tailwind v3 and v4. Uses CSS variables for easy theming.',
                                'icon' => 'palette'
                            ],
                            [
                                'title' => 'Production ready',
                                'description' => 'Accessible, responsive, and dark mode ready out of the box.',
                                'icon' => 'shield-check'
                            ],
                        ];
                        @endphp

                        @foreach($benefits as $index => $benefit)
                        <div
                            class="flex gap-4 transition-all duration-500 hover:translate-x-2"
                            :class="visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                            style="transition-delay: {{ 200 + ($index * 100) }}ms"
                        >
                            <div class="shrink-0 size-10 rounded-lg bg-primary/10 flex items-center justify-center hover:scale-110 hover:bg-primary/20 transition-all duration-300">
                                <x-dynamic-component :component="'lucide-' . $benefit['icon']" class="size-5 text-primary" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-foreground mb-1">{{ $benefit['title'] }}</h3>
                                <p class="text-sm text-muted-foreground">{{ $benefit['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Comparison Card --}}
                <div
                    class="relative transition-all duration-700 delay-300"
                    :class="visible ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-8 scale-95'"
                >
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-transparent rounded-2xl blur-2xl"></div>
                    <div class="relative bg-card border border-border rounded-2xl overflow-hidden hover:shadow-lg hover:shadow-primary/10 transition-shadow duration-300">
                        <div class="grid grid-cols-2 divide-x divide-border">
                            {{-- Before --}}
                            <div class="p-6 space-y-4">
                                <div class="flex items-center gap-2 text-destructive">
                                    <x-lucide-x-circle class="size-5" />
                                    <span class="font-semibold">Traditional way</span>
                                </div>
                                <ul class="space-y-3 text-sm text-muted-foreground">
                                    <li class="flex items-start gap-2">
                                        <x-lucide-x class="size-4 mt-0.5 text-destructive shrink-0" />
                                        <span>npm install complexity</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-x class="size-4 mt-0.5 text-destructive shrink-0" />
                                        <span>Black box components</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-x class="size-4 mt-0.5 text-destructive shrink-0" />
                                        <span>Hard to customize</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-x class="size-4 mt-0.5 text-destructive shrink-0" />
                                        <span>Version conflicts</span>
                                    </li>
                                </ul>
                            </div>
                            {{-- After --}}
                            <div class="p-6 space-y-4 bg-primary/5">
                                <div class="flex items-center gap-2 text-primary">
                                    <x-lucide-check-circle class="size-5" />
                                    <span class="font-semibold">PHP-UI way</span>
                                </div>
                                <ul class="space-y-3 text-sm text-muted-foreground">
                                    <li class="flex items-start gap-2">
                                        <x-lucide-check class="size-4 mt-0.5 text-primary shrink-0" />
                                        <span>Composer install, done</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-check class="size-4 mt-0.5 text-primary shrink-0" />
                                        <span>Full source access</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-check class="size-4 mt-0.5 text-primary shrink-0" />
                                        <span>Edit anything</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <x-lucide-check class="size-4 mt-0.5 text-primary shrink-0" />
                                        <span>Your code, your rules</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tech Stack Section --}}
    <section class="border-t border-border bg-muted/30" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-16">
            <div
                class="text-center mb-10 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
            >
                <p class="text-sm text-muted-foreground uppercase tracking-wider font-medium">Built for the modern Laravel stack</p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16">
                @php
                $stack = [
                    ['name' => 'Laravel', 'icon' => 'laravel' ],
                    ['name' => 'Livewire', 'icon' => 'livewire'],
                    ['name' => 'Tailwind CSS', 'icon' => 'tailwind' ],
                    ['name' => 'Alpine.js', 'icon' => 'alpinejs'],
                    // ['name' => 'Blade', 'icon' => 'file-code'],
                ];
                @endphp
                @foreach($stack as $index => $tech)
                <div
                    class="flex items-center gap-2 text-foreground opacity-70 hover:opacity-100 hover:scale-110 transition-all duration-300"
                    :class="visible ? 'opacity-70 translate-y-0' : 'opacity-0 translate-y-4'"
                    style="transition-delay: {{ 100 + ($index * 100) }}ms"
                >
                    <x-dynamic-component :component="'icons.' . $tech['icon']" class="size-10" />
                    <span class="font-semibold">{{ $tech['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="border-t border-border bg-muted/30" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <x-ui.badge variant="secondary" class="mb-4">Testimonials</x-ui.badge>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                    Loved by developers worldwide
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    See what Laravel developers are saying about PHP-UI
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @php
                $testimonials = [
                    [
                        'name' => 'Alexandre Mboude',
                        'role' => 'Full Stack Developer',
                        'location' => 'Douala, Cameroon',
                        'content' => 'PHP-UI completely changed how I build Laravel apps. The components are beautiful and the setup is incredibly simple. I can now focus on business logic instead of CSS.',
                        'rating' => 5,
                        'avatar' => 'AM'
                    ],
                    [
                        'name' => 'Marie Tchoumi',
                        'role' => 'Laravel Developer',
                        'location' => 'Yaoundé, Cameroon',
                        'content' => 'Finally! A component library that understands Laravel developers. No more fighting with npm packages and build tools. Just pure Blade goodness.',
                        'rating' => 5,
                        'avatar' => 'MT'
                    ],
                    [
                        'name' => 'Jean-Pierre Nkoulou',
                        'role' => 'Tech Lead',
                        'location' => 'Bamenda, Cameroon',
                        'content' => 'Our team productivity increased by 40% after adopting PHP-UI. The components are consistent, accessible, and work perfectly with Livewire.',
                        'rating' => 5,
                        'avatar' => 'JN'
                    ]
                ];
                @endphp

                @foreach($testimonials as $index => $testimonial)
                <div
                    class="relative group transition-all duration-700"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    style="transition-delay: {{ 200 + ($index * 150) }}ms"
                >
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-transparent to-primary/5 rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                    <div class="relative bg-card border border-border rounded-2xl p-8 space-y-6 h-full hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300">
                        {{-- Rating Stars --}}
                        <div class="flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                            <x-lucide-star class="size-5 {{ $i <= $testimonial['rating'] ? 'text-yellow-500 fill-yellow-500' : 'text-muted-foreground' }}" />
                            @endfor
                        </div>

                        {{-- Content --}}
                        <blockquote class="text-lg text-foreground leading-relaxed">
                            "{{ $testimonial['content'] }}"
                        </blockquote>

                        {{-- Author --}}
                        <div class="flex items-center gap-4 pt-4 border-t border-border">
                            <div class="size-12 rounded-full bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <span class="text-sm font-semibold text-primary">{{ $testimonial['avatar'] }}</span>
                            </div>
                            <div>
                                <div class="font-semibold text-foreground">{{ $testimonial['name'] }}</div>
                                <div class="text-sm text-muted-foreground">{{ $testimonial['role'] }}</div>
                                <div class="text-xs text-muted-foreground">{{ $testimonial['location'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Use Cases Section --}}
    <section class="border-t border-border" x-data="{ visible: false }" x-intersect:enter="visible = true">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div
                class="text-center mb-16 transition-all duration-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <x-ui.badge variant="secondary" class="mb-4">Use Cases</x-ui.badge>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">
                    Perfect for any Laravel project
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    From startups to enterprise applications, PHP-UI scales with your needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                @php
                $useCases = [
                    [
                        'icon' => 'rocket',
                        'title' => 'SaaS Applications',
                        'description' => 'Build beautiful dashboards and user interfaces for your SaaS products',
                        'features' => ['Responsive design', 'Dark mode', 'Accessibility']
                    ],
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'E-commerce',
                        'description' => 'Create stunning product pages and checkout flows',
                        'features' => ['Product cards', 'Forms', 'Payment UI']
                    ],
                    [
                        'icon' => 'briefcase',
                        'title' => 'Admin Panels',
                        'description' => 'Powerful admin interfaces for data management',
                        'features' => ['Data tables', 'Filters', 'CRUD forms']
                    ],
                    [
                        'icon' => 'users',
                        'title' => 'Social Platforms',
                        'description' => 'Engaging user interfaces for community features',
                        'features' => ['User profiles', 'Feeds', 'Notifications']
                    ]
                ];
                @endphp

                @foreach($useCases as $index => $useCase)
                <div
                    class="group p-6 rounded-xl border border-border bg-card hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 hover:-translate-y-1 transition-all duration-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    style="transition-delay: {{ 200 + ($index * 100) }}ms"
                >
                    <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 group-hover:scale-110 transition-all duration-300">
                        <x-dynamic-component :component="'lucide-' . $useCase['icon']" class="size-6 text-primary" />
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $useCase['title'] }}</h3>
                    <p class="text-sm text-muted-foreground mb-4">{{ $useCase['description'] }}</p>
                    <div class="space-y-2">
                        @foreach($useCase['features'] as $feature)
                        <div class="flex items-center gap-2 text-xs text-muted-foreground">
                            <x-lucide-check class="size-3 text-primary" />
                            <span>{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="border-t border-border relative overflow-hidden" x-data="{ visible: false }" x-intersect:enter="visible = true">
        {{-- Background --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl animate-pulse"></div>
        </div>

        <div class="container mx-auto px-4 py-24 lg:py-32">
            <div class="max-w-3xl mx-auto text-center space-y-8">
                <h2
                    class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-foreground transition-all duration-700"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    Join the open source revolution
                </h2>
                <p
                    class="text-lg text-muted-foreground max-w-xl mx-auto transition-all duration-700 delay-100"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    PHP-UI is 100% free and open source. No hidden fees, no premium tiers, no vendor lock-in. Just beautiful components for everyone.
                </p>

                {{-- Open Source Badges --}}
                <div
                    class="flex flex-wrap justify-center gap-4 text-sm transition-all duration-700 delay-200"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary hover:bg-primary/20 hover:scale-105 transition-all duration-300">
                        <x-lucide-shield-check class="size-4" />
                        MIT Licensed
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary hover:bg-primary/20 hover:scale-105 transition-all duration-300">
                        <x-lucide-code-2 class="size-4" />
                        Source Available
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary hover:bg-primary/20 hover:scale-105 transition-all duration-300">
                        <x-lucide-users class="size-4" />
                        Community Driven
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary hover:bg-primary/20 hover:scale-105 transition-all duration-300">
                        <x-lucide-infinity class="size-4" />
                        Forever Free
                    </div>
                </div>

                <div
                    class="flex flex-col sm:flex-row gap-4 justify-center transition-all duration-700 delay-300"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <x-ui.button href="/docs/installation" size="lg" class="shadow-lg shadow-primary/25 gap-2 hover:scale-105 transition-transform duration-300">
                        <x-lucide-rocket class="size-5" />
                        Start Building Free
                    </x-ui.button>
                    <x-ui.button href="https://github.com/jiordiviera/php-ui" target="_blank" variant="outline" size="lg" class="gap-2 hover:scale-105 transition-transform duration-300">
                        <x-dynamic-component component="icons.github" class="size-5" />
                        Contribute on GitHub
                    </x-ui.button>
                </div>

                <div
                    class="space-y-4 pt-4 transition-all duration-700 delay-500"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <p class="text-sm text-muted-foreground">
                        <x-lucide-heart class="size-4 inline text-destructive animate-pulse" />
                        Made with love by the Laravel community, for the Laravel community
                    </p>
                    <div class="flex items-center justify-center gap-6 text-xs text-muted-foreground">
                        <span>⭐ 1,000+ GitHub stars</span>
                        <span>📦 10,000+ downloads</span>
                        <span>👥 50+ contributors</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
