<div class="space-y-8">
    <div class="space-y-4">
        <p class="text-lg text-muted-foreground">
            PHP-UI brings the power of shadcn/ui to Laravel developers. Build beautiful, accessible components with
            Tailwind CSS and integrate them seamlessly into your TALL stack applications.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-zap class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">Lightning Fast</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                Add components to your project in seconds with our CLI tool. No complex setup required.
            </p>
        </div>

        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-palette class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">Fully Customizable</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                Built with Tailwind CSS and CSS variables. Customize colors, spacing, and more to match your design
                system.
            </p>
        </div>

        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-shield class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">Accessible</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                All components follow accessibility best practices and ARIA guidelines out of the box.
            </p>
        </div>

        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-code class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">Developer Experience</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                TypeScript support, comprehensive documentation, and excellent IDE support.
            </p>
        </div>

        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-layers class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">TALL Stack Ready</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                Designed specifically for Laravel, Livewire, Alpine.js, and Tailwind CSS applications.
            </p>
        </div>

        <div class="space-y-3">
            <div class="flex items-center space-x-2">
                <x-lucide-heart class="h-5 w-5 text-primary" />
                <h3 class="font-semibold">Open Source</h3>
            </div>
            <p class="text-sm text-muted-foreground">
                Free and open source. MIT licensed. Community-driven development.
            </p>
        </div>
    </div>

    <div class="space-y-4">
        <h2 class="text-2xl font-bold">How it works</h2>
        <div class="space-y-4">
            <div class="flex items-start space-x-4">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-primary-foreground text-sm font-medium">
                    1
                </div>
                <div class="space-y-1">
                    <h3 class="font-semibold">Install PHP-UI</h3>
                    <p class="text-sm text-muted-foreground">
                        Add PHP-UI to your Laravel project with Composer.
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-primary-foreground text-sm font-medium">
                    2
                </div>
                <div class="space-y-1">
                    <h3 class="font-semibold">Choose your components</h3>
                    <p class="text-sm text-muted-foreground">
                        Browse our collection of beautiful, accessible components.
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-primary-foreground text-sm font-medium">
                    3
                </div>
                <div class="space-y-1">
                    <h3 class="font-semibold">Add to your project</h3>
                    <p class="text-sm text-muted-foreground">
                        Use our CLI tool to scaffold components directly into your codebase.
                    </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-primary-foreground text-sm font-medium">
                    4
                </div>
                <div class="space-y-1">
                    <h3 class="font-semibold">Customize and deploy</h3>
                    <p class="text-sm text-muted-foreground">
                        Modify the components to match your design system and ship your application.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-4">
        <h2 class="text-2xl font-bold">Quick start</h2>
        <div class="relative group">
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <x-markdown-content content="```bash
composer require jiordiviera/php-ui

# Add a component to your project
php-ui add button

# That's it! The component is now in your codebase
                " />
            </div>
        </div>
    </div>

    <div class="flex gap-4">
        <x-ui.button href="{{ route('docs.show', 'installation') }}" size="lg">
            <x-lucide-rocket class="h-4 w-4 mr-2" />
            Get Started
        </x-ui.button>
        <x-ui.button href="{{ route('docs.show', 'components') }}" variant="outline" size="lg">
            <x-lucide-layout-grid class="h-4 w-4 mr-2" />
            Browse Components
        </x-ui.button>
    </div>
</div>