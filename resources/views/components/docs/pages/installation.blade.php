<div class="space-y-12">
    {{-- Requirements Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">1</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Requirements</h2>
        </div>
        <div class="ml-11">
            <p class="text-zinc-500 dark:text-zinc-400 mb-4">
                Before installing PHP-UI, make sure your project meets the following requirements:
            </p>
            <div class="grid sm:grid-cols-3 gap-4">
                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50">
                    <x-lucide-box class="size-6 text-primary" />
                    <div>
                        <p class="font-semibold text-foreground">Laravel</p>
                        <p class="text-sm text-zinc-500">10.0 or higher</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50">
                    <x-lucide-code class="size-6 text-primary" />
                    <div>
                        <p class="font-semibold text-foreground">PHP</p>
                        <p class="text-sm text-zinc-500">8.2 or higher</p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50">
                    <x-lucide-paintbrush class="size-6 text-primary" />
                    <div>
                        <p class="font-semibold text-foreground">Tailwind CSS</p>
                        <p class="text-sm text-zinc-500">v4.0 or higher</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Install CLI Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">2</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Install PHP-UI CLI</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p class="text-zinc-500 dark:text-zinc-400">
                Install the PHP-UI CLI globally using Composer. This will give you access to the <code
                    class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">php-ui</code> command.
            </p>
            <x-markdown-content content="```bash
composer global require jiordiviera/php-ui" />
            <x-ui.alert variant="default" title="Note" icon="info">
                Make sure your global Composer <code>bin</code> directory is in your system's PATH. Usually it's
                <code>~/.composer/vendor/bin</code> or <code>~/.config/composer/vendor/bin</code>.
            </x-ui.alert>
        </div>
    </section>

    {{-- Initialize Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">3</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Initialize in your Project</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p class="text-zinc-500 dark:text-zinc-400">
                Navigate to your Laravel project directory and run the init command. This will set up the required
                configuration files.
            </p>
            <x-markdown-content content="```bash
cd your-laravel-project
php-ui init" />
            <p class="text-zinc-500 dark:text-zinc-400">
                This command will:
            </p>
            <ul class="list-none space-y-2 text-zinc-500 dark:text-zinc-400">
                <li class="flex items-center gap-2">
                    <x-lucide-check class="size-4 text-emerald-500" />
                    Create a <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">php-ui.json</code>
                    configuration file
                </li>
                <li class="flex items-center gap-2">
                    <x-lucide-check class="size-4 text-emerald-500" />
                    Set up the components directory structure
                </li>
                <li class="flex items-center gap-2">
                    <x-lucide-check class="size-4 text-emerald-500" />
                    Add base CSS variables to your stylesheet
                </li>
                <li class="flex items-center gap-2">
                    <x-lucide-check class="size-4 text-emerald-500" />
                    Configure Alpine.js integration
                </li>
            </ul>
        </div>
    </section>

    {{-- Add Components Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">4</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Add Components</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p class="text-zinc-500 dark:text-zinc-400">
                Add individual components to your project using the <code
                    class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">add</code> command:
            </p>
            <x-markdown-content content="```bash
# Add a single component
php-ui add button

# Add multiple components at once
php-ui add button badge input alert

# Add all available components
php-ui add --all" />
            <p class="text-zinc-500 dark:text-zinc-400">
                Components will be added to <code
                    class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">resources/views/components/ui/</code>.
            </p>
        </div>
    </section>

    {{-- Usage Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary"
                class="rounded-full h-8 w-8 flex items-center justify-center p-0 text-sm font-bold">5</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">Use Components</h2>
        </div>
        <div class="ml-11 space-y-4">
            <p class="text-zinc-500 dark:text-zinc-400">
                Once installed, use components in your Blade templates with the <code
                    class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">x-ui.</code> prefix:
            </p>
            <x-markdown-content content="```blade
{{-- Button component --}}
<x-ui.button variant='primary'>Click me</x-ui.button>

{{-- Input with label --}}
<x-ui.input label='Email' type='email' placeholder='Enter your email' />

{{-- Alert with icon --}}
<x-ui.alert variant='destructive' title='Error' icon='alert-circle'>
    Something went wrong!
</x-ui.alert>" />
        </div>
    </section>

    {{-- Available Commands Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-lucide-terminal class="size-6 text-primary" />
            <h2 class="text-2xl font-bold tracking-tight">Available Commands</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-zinc-200 dark:border-zinc-800">
                        <th class="text-left py-3 px-4 font-semibold text-foreground">Command</th>
                        <th class="text-left py-3 px-4 font-semibold text-foreground">Description</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    <tr>
                        <td class="py-3 px-4"><code
                                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800">php-ui init</code></td>
                        <td class="py-3 px-4 text-zinc-500 dark:text-zinc-400">Initialize PHP-UI in your project</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code
                                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800">php-ui add [component]</code>
                        </td>
                        <td class="py-3 px-4 text-zinc-500 dark:text-zinc-400">Add a component to your project</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code
                                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800">php-ui add --all</code></td>
                        <td class="py-3 px-4 text-zinc-500 dark:text-zinc-400">Add all available components</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code
                                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800">php-ui list</code></td>
                        <td class="py-3 px-4 text-zinc-500 dark:text-zinc-400">List all available components</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code
                                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800">php-ui update</code></td>
                        <td class="py-3 px-4 text-zinc-500 dark:text-zinc-400">Update PHP-UI CLI to latest version</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- What's Next Section --}}
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <x-lucide-rocket class="size-6 text-primary" />
            <h2 class="text-2xl font-bold tracking-tight">What's Next?</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
            <a href="{{ route('docs.show', 'theming') }}"
                class="group p-6 rounded-xl border border-zinc-200 dark:border-zinc-800 hover:border-primary/50 dark:hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-3 mb-2">
                    <x-lucide-palette class="size-5 text-primary" />
                    <h3 class="font-semibold text-foreground group-hover:text-primary transition-colors">Theming</h3>
                </div>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Learn how to customize colors, fonts, and other
                    design tokens.</p>
            </a>
            <a href="{{ route('docs.show', 'components/button') }}"
                class="group p-6 rounded-xl border border-zinc-200 dark:border-zinc-800 hover:border-primary/50 dark:hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-3 mb-2">
                    <x-lucide-mouse-pointer-click class="size-5 text-primary" />
                    <h3 class="font-semibold text-foreground group-hover:text-primary transition-colors">Components</h3>
                </div>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Explore all available components and their usage.
                </p>
            </a>
        </div>
    </section>
</div>