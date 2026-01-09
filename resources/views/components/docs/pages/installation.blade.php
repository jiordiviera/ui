<div class="space-y-12">

    {{-- Requirements Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">1</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Requirements</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p>
                Make sure your environment meets the following requirements before installing PHP UI.
            </p>
            <ul class="list-disc ml-6 space-y-1">
                <li><a href="https://www.php.net/?utm_source=php-ui-docs" target="_blank"
                        class="underline text-primary">PHP</a> 8.2 or higher</li>
                <li><a href="https://laravel.com/docs?utm_source=php-ui-docs" target="_blank"
                        class="underline text-primary">Laravel</a> 10.0 or higher</li>
                <li><a href="https://tailwindcss.com?utm_source=php-ui-docs" target="_blank"
                        class="underline text-primary">Tailwind CSS</a> v3 or v4</li>
                <li>Node.js build pipeline required Vite, Mix, Bun, whatever you fancy</li>
            </ul>
        </div>
    </section>

    {{-- Create Laravel Project --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">2</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Start a Laravel Project</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p>
                PHP UI must be installed inside an existing Laravel application. Create one if you do not already have
                it:
            </p>
            <x-markdown-content content="```bash
laravel new my-app
cd my-app
# or
composer create-project laravel/laravel my-app
cd my-app
```" />
        </div>
    </section>

    {{-- Install PHP UI --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">3</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Install PHP UI</h2>
        </div>
        <div class="ml-11 space-y-6">

            {{-- Local Install --}}
            <div class="space-y-2">
                <h3 class="font-semibold">Option A Install locally dev mode</h3>
                <p>
                    Adds PHP UI to your project and uses the local CLI binary.
                </p>
                <x-markdown-content content="```bash
composer require jiordiviera/php-ui --dev
```" />
            </div>

            {{-- Global CLI --}}
            <div class="space-y-2">
                <h3 class="font-semibold">Option B Install CLI globally</h3>
                <p>
                    Gives access to the global <code>php-ui</code> command from any directory.
                </p>
                <x-markdown-content content="```bash
composer global require jiordiviera/php-ui
```" />
                <x-ui.alert variant="default" title="Note" icon="info">
                    Make sure your global Composer <code>bin</code> directory is in your system PATH.
                </x-ui.alert>
            </div>
        </div>
    </section>

    {{-- Initialize --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">4</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Initialize PHP UI</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p>
                Run the init command inside your Laravel project.
            </p>
            <x-markdown-content content="```bash
# If installed locally
./vendor/bin/php-ui init

# If installed globally
php-ui init
```" />
            <p>
                This command will:
            </p>
            <ul class="list-none space-y-2">
                <li class="flex items-center gap-2"><x-lucide-check class="size-4 text-emerald-500" /> Create
                    <code>php-ui.json</code></li>
                <li class="flex items-center gap-2"><x-lucide-check class="size-4 text-emerald-500" /> Create component
                    directory structure</li>
                <li class="flex items-center gap-2"><x-lucide-check class="size-4 text-emerald-500" /> Add base CSS
                    tokens compatible with Tailwind v3 and v4</li>
                <li class="flex items-center gap-2"><x-lucide-check class="size-4 text-emerald-500" /> Configure Alpine
                    support out of the box</li>
            </ul>
        </div>
    </section>

    {{-- Add Components --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">5</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Add Components</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p>
                Add UI components to your project.
            </p>
            <x-markdown-content content="```bash
# Local install
./vendor/bin/php-ui add button

# Global install
php-ui add button

# Multiple
php-ui add badge input alert

# Everything
php-ui add --all
```" />
        </div>
    </section>

    {{-- Use Components --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">6</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Use Components</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p class="text-muted-foreground">
                Use components in Blade templates with the <code class="px-1.5 py-0.5 rounded bg-muted text-sm">x-ui.</code> prefix.
            </p>
            @php
            $usageCode = <<<'CODE'
```blade
<x-ui.button variant="primary">Click me</x-ui.button>

<x-ui.input label="Email" type="email" />

<x-ui.alert variant="destructive" title="Error">
    Something went wrong
</x-ui.alert>
```
CODE;
            @endphp
            <x-markdown-content :content="$usageCode" />
        </div>
    </section>

    {{-- What's Next --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-lucide-rocket class="size-6 text-primary" />
            <h2 class="text-2xl font-bold tracking-tight">What's Next</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
            <a href="{{ route('docs.show', 'theming') }}"
                class="group p-6 rounded-xl border hover:border-primary/50 transition-colors">
                <h3 class="font-semibold group-hover:text-primary">Theming</h3>
                <p class="text-sm">Customize tokens colors and fonts.</p>
            </a>
            <a href="{{ route('docs.show', 'components/button') }}"
                class="group p-6 rounded-xl border hover:border-primary/50 transition-colors">
                <h3 class="font-semibold group-hover:text-primary">Components</h3>
                <p class="text-sm">Browse all components.</p>
            </a>
        </div>
    </section>
</div>
