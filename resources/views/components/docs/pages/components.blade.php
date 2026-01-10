<div class="space-y-8">
    <div class="space-y-4">
        <p class="text-lg text-muted-foreground">
            Explore our collection of beautiful, accessible components. Each component is built with Tailwind CSS and
            designed to work seamlessly with Laravel and Livewire.
        </p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach (get_component_items() as $component)
            <a href="{{ route('components.show', str($component)->slug()) }}"
                class="group block p-6 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-foreground">{{ $component }}</h3>
                    <x-lucide-arrow-right
                        class="h-4 w-4 text-muted-foreground group-hover:text-primary transition-colors" />
                </div>
                <p class="text-sm text-muted-foreground">
                    {{ get_component_description($component) }}
                </p>
            </a>
        @endforeach
    </div>

    <div class="space-y-4">
        <h2 class="text-2xl font-bold">Component Categories</h2>
        <div class="grid gap-4 md:grid-cols-2">
            @foreach (get_component_categories() as $categoryName => $components)
                <div class="space-y-3">
                    <h3 class="font-semibold text-foreground">{{ $categoryName }} Components</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($components as $comp)
                            <x-ui.badge variant="secondary" class="text-xs">
                                <a href="{{ route('components.show', str($comp)->slug()) }}" class="hover:underline">{{ $comp }}</a>
                            </x-ui.badge>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="space-y-4">
        <h2 class="text-2xl font-bold">Installation</h2>
        <div class="relative group">
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <x-markdown-content content="```bash
# Install PHP-UI
composer require jiordiviera/php-ui

# Add any component to your project
php-ui add button
php-ui add input
php-ui add alert
                " />
            </div>
        </div>
    </div>
</div>
