<x-layouts.app>
    <!-- Hero Section -->
    <section class="space-y-6 pb-8 pt-6 md:pb-12 md:pt-10 lg:py-32 overflow-hidden">
        <div class="container mx-auto flex max-w-[64rem] flex-col items-center gap-4 text-center px-4 relative">

            <!-- Announcement Badge -->
            <a href="https://github.com/jiordiviera/php-ui/releases" target="_blank">
                <x-ui.badge variant="outline"
                    class="gap-2 py-1.5 px-3 rounded-full hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                    <x-ui.badge variant="primary" size="sm"
                        class="rounded-full px-2 py-0.5 text-[10px] h-auto">New</x-ui.badge>
                    <span>PHP-UI v1.0 is now available</span>
                    <x-lucide-arrow-right class="size-3.5 ml-1" />
                </x-ui.badge>
            </a>

            <!-- Main Heading -->
            <h1 class="font-sans text-4xl font-extrabold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl">
                Build your component library <br class="hidden sm:inline" />
                <span class="text-blue-600 dark:text-blue-500">the Laravel way.</span>
            </h1>

            <!-- Subheading -->
            <p class="max-w-[42rem] leading-normal text-zinc-500 sm:text-xl sm:leading-8 dark:text-zinc-400">
                Beautifully designed components that you can copy and paste into your apps. Accessible. Customizable.
                Open Source.
            </p>

            <!-- Buttons & Command -->
            <div class="flex flex-col sm:flex-row gap-4 mt-6 w-full justify-center items-center">
                <x-ui.button href="/docs/installation" size="lg" class="w-full sm:w-auto shadow-xl shadow-blue-500/10">
                    Get Started
                </x-ui.button>

                {{-- <div class="w-full sm:w-auto text-left"> --}}
                    <div class="prose prose-sm dark:prose-invert max-w-none">
                        <x-markdown-content content="```bash
                        composer require jiordiviera/php-ui" />
                    </div>
                    {{--
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Example Visual Section -->
    <section class="container mx-auto py-8 md:py-12 lg:py-24 px-4 border-t border-border">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold tracking-tight">Not a component library.</h2>
                <p class="text-lg text-zinc-500 dark:text-zinc-400">
                    It's a collection of re-usable components that you can copy and paste into your apps.
                </p>
                <ul class="space-y-4 mt-4">
                    <li class="flex items-center gap-3">
                        <div class="rounded-full bg-primary/10 p-1.5">
                            <x-lucide-check class="h-4 w-4 text-primary" />
                        </div>
                        <span class="font-medium text-foreground/80">You own the code. No vendor
                            lock-in.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="rounded-full bg-primary/10 p-1.5">
                            <x-lucide-check class="h-4 w-4 text-primary" />
                        </div>
                        <span class="font-medium text-foreground/80">Styled with Tailwind CSS v4.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="rounded-full bg-primary/10 p-1.5">
                            <x-lucide-check class="h-4 w-4 text-primary" />
                        </div>
                        <span class="font-medium text-foreground/80">Fully compatible with Livewire
                            3.</span>
                    </li>
                </ul>
            </div>

            <!-- Fake UI Card -->
            <div
                class="relative rounded-xl border border-border p-6 md:p-8">
                <!-- Using raw divs for card structure as generic 'card' is not in standard CLI yet -->
                <div class="space-y-6">
                    <div class="space-y-2 text-center">
                        <h3 class="text-2xl font-bold">Create an account</h3>
                        <p class="text-sm text-foreground/80">Enter your email below to create your
                            account</p>
                    </div>
                    <div class="grid gap-4">
                        <x-ui.input label="Email" type="email" placeholder="m@example.com" id="email" />
                        <x-ui.input label="Password" type="password" id="password" />
                        <x-ui.button class="w-full">
                            Create account
                        </x-ui.button>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <span class="w-full border-t border-border"></span>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase">
                            <span class="px-2 text-foreground/80">Or continue
                                with</span>
                        </div>
                    </div>

                    <x-ui.button variant="outline" class="w-full flex" icon="icons.github" :lucide="false">
                        GitHub
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="container mx-auto py-8 md:py-12 lg:py-24 px-4">
        <div class="mx-auto flex max-w-[58rem] flex-col items-center justify-center gap-4 text-center">
            <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-5xl">
                Everything you need
            </h2>
            <p class="max-w-[85%] leading-normal text-foreground/80 sm:text-lg sm:leading-7">
                A complete toolkit for building modern Laravel applications.
            </p>
        </div>

        @php
            $features = [
                [
                    'title' => 'Laravel Native',
                    'description' => 'Designed to feel like a natural extension of the Laravel ecosystem. No complex build steps.',
                    'icon' => 'package'
                ],
                [
                    'title' => 'Copy & Paste',
                    'description' => 'Every component is its own file. Total control over the code. No dependency hell.',
                    'icon' => 'copy'
                ],
                [
                    'title' => 'Themable',
                    'description' => 'Built on Tailwind CSS variables. Dark mode ready out of the box. Easy to brand.',
                    'icon' => 'palette'
                ],
                [
                    'title' => 'Accessible',
                    'description' => 'Follows WAI-ARIA patterns. Keyboard navigation and screen reader support included.',
                    'icon' => 'accessibility'
                ],
                [
                    'title' => 'Lightweight',
                    'description' => 'Zero runtime overhead. Just standard Blade components and Alpine.js where needed.',
                    'icon' => 'zap'
                ],
                [
                    'title' => 'Open Source',
                    'description' => 'MIT Licensed. Use it in personal or commercial projects without any restrictions.',
                    'icon' => 'code-2'
                ],
            ];
        @endphp

        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 mt-12">
            @foreach ($features as $feature)
                <div
                    class="group relative overflow-hidden rounded-lg border border-border p-2  transition-all ">
                    <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                        <div
                            class="rounded-full w-10 h-10 flex items-center justify-center bg-input group-hover:scale-110 transition-transform duration-300 text-foreground/80">
                            <x-dynamic-component :component="'lucide-' . $feature['icon']" class="size-5" />
                        </div>
                        <div class="space-y-2">
                            <h3 class="font-bold">{{ $feature['title'] }}</h3>
                            <p class="text-sm text-foreground/80">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Call to Action -->
    <section class="container mx-auto py-8 md:py-12 lg:py-24 px-4 text-center">
        <h2 class="text-3xl font-bold tracking-tight md:text-4xl">
            Ready to build?
        </h2>
        <p class="mx-auto mt-4 max-w-[42rem] text-lg text-foreground/80">
            Start building your next application with beautifully designed components.
        </p>
        <div class="mt-8 flex justify-center gap-4">
            <x-ui.button href="/docs/installation" size="lg" class="shadow-lg">
                Get Started
            </x-ui.button>
            <x-ui.button href="https://github.com/jiordiviera/php-ui" variant="outline" size="lg" icon="icons.github" :lucide="false">
                View on GitHub
            </x-ui.button>
        </div>
    </section>
</x-layouts.app>
