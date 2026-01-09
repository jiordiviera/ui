<x-layouts.app>
    {{-- Hero Section with Gradient Background --}}
    <section class="relative overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,transparent_0%,transparent_49%,var(--color-border)_50%,transparent_51%,transparent_100%)] bg-[size:80px_100%] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="max-w-5xl mx-auto text-center space-y-8">
                {{-- Announcement --}}
                <a href="https://github.com/jiordiviera/php-ui/releases" target="_blank" class="inline-flex">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-border bg-card/50 backdrop-blur-sm text-sm font-medium hover:bg-accent transition-colors">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        PHP-UI v1.0 is here
                        <x-lucide-arrow-right class="size-4" />
                    </span>
                </a>

                {{-- Main Heading --}}
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-foreground">
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
                <p class="text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                    A collection of <strong class="text-foreground">50+ beautifully crafted</strong> Blade components for Laravel.
                    Copy, paste, and make them yours. No npm packages, no build complexity.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
                    <x-ui.button href="/docs/installation" size="lg" class="w-full sm:w-auto shadow-lg shadow-primary/25 gap-2">
                        <x-lucide-rocket class="size-5" />
                        Get Started Free
                    </x-ui.button>
                    <x-ui.button href="/docs/components/button" variant="outline" size="lg" class="w-full sm:w-auto gap-2">
                        <x-lucide-layout-grid class="size-5" />
                        Browse Components
                    </x-ui.button>
                </div>

                {{-- Quick Install Command --}}
                <div class="pt-6" x-data="{ copied: false }">
                    <div class="inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-card border border-border font-mono text-sm">
                        <span class="text-muted-foreground">$</span>
                        <code class="text-foreground">composer require jiordiviera/php-ui</code>
                        <button
                            @click="navigator.clipboard.writeText('composer require jiordiviera/php-ui'); copied = true; setTimeout(() => copied = false, 2000)"
                            class="p-1.5 rounded-md hover:bg-accent transition-colors"
                            :class="copied ? 'text-primary' : 'text-muted-foreground'"
                        >
                            <x-lucide-check x-show="copied" class="size-4" x-cloak />
                            <x-lucide-copy x-show="!copied" class="size-4" />
                        </button>
                    </div>
                </div>

                {{-- Trust Badges --}}
                <div class="flex flex-wrap justify-center gap-6 pt-8 text-sm text-muted-foreground">
                    <div class="flex items-center gap-2">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>MIT Licensed</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Tailwind v3 & v4</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Livewire Ready</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-check-circle class="size-5 text-primary" />
                        <span>Dark Mode</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Live Component Preview Section --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="text-center mb-16">
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
                <div class="space-y-4 order-2 lg:order-1">
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
                <div class="order-1 lg:order-2">
                    <div class="p-1 rounded-2xl bg-gradient-to-br from-primary/20 via-transparent to-primary/10">
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
    <section class="border-t border-border">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="text-center mb-16">
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
                @foreach($categories as $category)
                <div class="group p-6 rounded-xl border border-border bg-card hover:border-primary/50 hover:shadow-lg hover:shadow-primary/5 transition-all cursor-pointer">
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
                <div class="p-6 rounded-xl border border-border bg-card space-y-4">
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-mouse-pointer-click class="size-4 text-primary" />
                        Buttons
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button size="sm">Primary</x-ui.button>
                        <x-ui.button size="sm" variant="secondary">Secondary</x-ui.button>
                        <x-ui.button size="sm" variant="outline">Outline</x-ui.button>
                        <x-ui.button size="sm" variant="destructive">Delete</x-ui.button>
                    </div>
                </div>

                {{-- Badges --}}
                <div class="p-6 rounded-xl border border-border bg-card space-y-4">
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-tag class="size-4 text-primary" />
                        Badges
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.badge>Default</x-ui.badge>
                        <x-ui.badge variant="secondary">Secondary</x-ui.badge>
                        <x-ui.badge variant="outline">Outline</x-ui.badge>
                        <x-ui.badge variant="destructive">Error</x-ui.badge>
                    </div>
                </div>

                {{-- Alerts --}}
                <div class="p-6 rounded-xl border border-border bg-card space-y-4">
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-bell class="size-4 text-primary" />
                        Alerts
                    </h4>
                    <x-ui.alert icon="info" class="text-sm">
                        This is an informational alert.
                    </x-ui.alert>
                </div>

                {{-- Input --}}
                <div class="p-6 rounded-xl border border-border bg-card space-y-4">
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-text-cursor-input class="size-4 text-primary" />
                        Inputs
                    </h4>
                    <x-ui.input placeholder="Type something..." size="sm" />
                </div>

                {{-- Avatar --}}
                <div class="p-6 rounded-xl border border-border bg-card space-y-4">
                    <h4 class="font-semibold text-card-foreground flex items-center gap-2">
                        <x-lucide-user-circle class="size-4 text-primary" />
                        Avatars
                    </h4>
                    <div class="flex items-center gap-3">
                        <x-ui.avatar size="sm" initials="JD" />
                        <x-ui.avatar size="md" initials="AB" />
                        <x-ui.avatar size="lg" initials="XY" />
                    </div>
                </div>

                {{-- More Coming --}}
                <a href="/docs/components/button" class="group p-6 rounded-xl border border-dashed border-border hover:border-primary/50 bg-card/50 flex flex-col items-center justify-center gap-2 transition-all">
                    <div class="size-10 rounded-full bg-muted flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                        <x-lucide-plus class="size-5 text-muted-foreground group-hover:text-primary transition-colors" />
                    </div>
                    <span class="text-sm font-medium text-muted-foreground group-hover:text-primary transition-colors">View all components</span>
                </a>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="text-center mb-16">
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
                        'code' => 'composer require jiordiviera/php-ui',
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

                @foreach($steps as $step)
                <div class="relative">
                    {{-- Step Number --}}
                    <div class="text-7xl font-black text-primary/10 absolute -top-4 -left-2">{{ $step['step'] }}</div>
                    <div class="relative pt-8 space-y-4">
                        <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center">
                            <x-dynamic-component :component="'lucide-' . $step['icon']" class="size-6 text-primary" />
                        </div>
                        <h3 class="text-xl font-bold text-foreground">{{ $step['title'] }}</h3>
                        <p class="text-muted-foreground">{{ $step['description'] }}</p>
                        <div class="font-mono text-sm bg-card border border-border rounded-lg px-4 py-3 text-foreground">
                            <span class="text-muted-foreground">$</span> {{ $step['code'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why PHP-UI Section --}}
    <section class="border-t border-border">
        <div class="container mx-auto px-4 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center max-w-6xl mx-auto">
                <div class="space-y-8">
                    <div>
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

                        @foreach($benefits as $benefit)
                        <div class="flex gap-4">
                            <div class="shrink-0 size-10 rounded-lg bg-primary/10 flex items-center justify-center">
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
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-transparent rounded-2xl blur-2xl"></div>
                    <div class="relative bg-card border border-border rounded-2xl overflow-hidden">
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
    <section class="border-t border-border bg-muted/30">
        <div class="container mx-auto px-4 py-16">
            <div class="text-center mb-10">
                <p class="text-sm text-muted-foreground uppercase tracking-wider font-medium">Built for the modern Laravel stack</p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16 opacity-70">
                @php
                $stack = [
                    ['name' => 'Laravel', 'icon' => 'code-2'],
                    ['name' => 'Livewire', 'icon' => 'zap'],
                    ['name' => 'Tailwind CSS', 'icon' => 'palette'],
                    ['name' => 'Alpine.js', 'icon' => 'mountain'],
                    ['name' => 'Blade', 'icon' => 'file-code'],
                ];
                @endphp
                @foreach($stack as $tech)
                <div class="flex items-center gap-2 text-foreground">
                    <x-dynamic-component :component="'lucide-' . $tech['icon']" class="size-5" />
                    <span class="font-semibold">{{ $tech['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="border-t border-border relative overflow-hidden">
        {{-- Background --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 py-24 lg:py-32">
            <div class="max-w-3xl mx-auto text-center space-y-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-foreground">
                    Ready to build something amazing?
                </h2>
                <p class="text-lg text-muted-foreground max-w-xl mx-auto">
                    Join developers who are building faster with PHP-UI. Start for free, no credit card required.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-ui.button href="/docs/installation" size="lg" class="shadow-lg shadow-primary/25 gap-2">
                        <x-lucide-rocket class="size-5" />
                        Get Started Now
                    </x-ui.button>
                    <x-ui.button href="https://github.com/jiordiviera/php-ui" target="_blank" variant="outline" size="lg" class="gap-2">
                        <x-dynamic-component component="icons.github" class="size-5" />
                        Star on GitHub
                    </x-ui.button>
                </div>
                <p class="text-sm text-muted-foreground">
                    <x-lucide-heart class="size-4 inline text-destructive" />
                    Open source and free forever. MIT License.
                </p>
            </div>
        </div>
    </section>
</x-layouts.app>
