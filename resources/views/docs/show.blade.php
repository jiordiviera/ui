<x-layouts.docs>
    <div class="space-y-4">
        <h1 class="scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl">
            {{ str($page)->replace('-', ' ')->title() }}
        </h1>
        <p class="text-lg text-zinc-500 dark:text-zinc-400">
            @if(request()->is('docs/components/*'))
                Scaffold a {{ str($page)->replace('-', ' ') }} component into your project.
            @elseif($page === 'theming')
                Customize the look and feel of your components with CSS variables.
            @else
                How to install and configure PHP-UI in your Laravel project.
            @endif
        </p>
    </div>

    <div class="pb-12 pt-8" x-data="{ tab: 'preview' }">
        @if(request()->is('docs/components/*'))
            <!-- Tabs Header -->
            <div class="flex items-center space-x-4 border-b border-zinc-200 dark:border-zinc-800 mb-6">
                <button @click="tab = 'preview'" :class="tab === 'preview' ? 'border-zinc-900 dark:border-zinc-50 text-zinc-900 dark:text-zinc-50' : 'border-transparent text-zinc-500'" class="pb-2 text-sm font-medium border-b-2 transition-colors">Preview</button>
                <button @click="tab = 'code'" :class="tab === 'code' ? 'border-zinc-900 dark:border-zinc-50 text-zinc-900 dark:text-zinc-50' : 'border-transparent text-zinc-500'" class="pb-2 text-sm font-medium border-b-2 transition-colors">Code</button>
            </div>

            <!-- Preview Tab -->
            <div x-show="tab === 'preview'" class="space-y-8">
                @php
                    $viewName = 'components.ui.' . $page;
                    $componentName = 'ui.' . $page;
                    $exists = View::exists($viewName);
                @endphp

                @if($exists)
                    <!-- Main Preview Area -->
                    <div class="flex items-center justify-center rounded-lg border border-zinc-200 bg-zinc-50 p-8 dark:border-zinc-800 dark:bg-zinc-900/50 min-h-[350px]">
                         {{-- Dynamic Component Examples based on Page --}}
                         @if($page === 'button')
                            <div class="flex flex-col gap-8 items-center">
                                <div class="flex flex-wrap gap-4 justify-center items-center">
                                    <x-dynamic-component :component="$componentName" variant="primary">Primary</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" variant="secondary">Secondary</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" variant="outline">Outline</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" variant="ghost">Ghost</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" variant="destructive">Destructive</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" variant="link">Link</x-dynamic-component>
                                </div>
                                <div class="flex flex-wrap gap-4 justify-center items-center">
                                    <x-dynamic-component :component="$componentName" size="sm">Small</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" size="md">Medium</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" size="lg">Large</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" size="icon" icon="plus" />
                                </div>
                                <div class="flex flex-wrap gap-4 justify-center items-center">
                                    <x-dynamic-component :component="$componentName" icon="mail">Login with Email</x-dynamic-component>
                                    <x-dynamic-component :component="$componentName" loading>Loading</x-dynamic-component>
                                </div>
                            </div>
                        @elseif($page === 'badge')
                            <div class="flex flex-wrap gap-4 justify-center">
                                <x-dynamic-component :component="$componentName" variant="primary">Primary</x-dynamic-component>
                                <x-dynamic-component :component="$componentName" variant="secondary">Secondary</x-dynamic-component>
                                <x-dynamic-component :component="$componentName" variant="outline">Outline</x-dynamic-component>
                                <x-dynamic-component :component="$componentName" variant="destructive">Destructive</x-dynamic-component>
                            </div>
                        @elseif($page === 'input')
                             <div class="w-full max-w-sm space-y-4">
                                <x-dynamic-component :component="$componentName" label="Email" placeholder="Email" type="email" />
                                <x-dynamic-component :component="$componentName" label="With Icon" icon="mail" placeholder="Email" />
                                <x-dynamic-component :component="$componentName" label="Disabled" disabled placeholder="Disabled" />
                            </div>
                        @elseif($page === 'alert')
                             <div class="w-full max-w-2xl space-y-4">
                                <x-dynamic-component :component="$componentName" title="Heads up!" variant="default">
                                    You can add components to your app using the cli.
                                </x-dynamic-component>
                                <x-dynamic-component :component="$componentName" title="Error" variant="destructive" icon="alert-circle">
                                    Your session has expired. Please log in again.
                                </x-dynamic-component>
                            </div>
                        @else
                            <!-- Default Generic Preview -->
                             <div class="text-center">
                                <x-dynamic-component :component="$componentName">
                                    Sample {{ str($page)->title() }}
                                </x-dynamic-component>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="flex items-center justify-center rounded-lg border border-zinc-200 bg-zinc-50 p-8 dark:border-zinc-800 dark:bg-zinc-900/50 min-h-[200px]">
                        <div class="text-center space-y-3">
                            <p class="text-sm text-zinc-500">Component <code>{{ $page }}</code> not found in <code>resources/views/components/ui/</code></p>
                            <p class="text-xs text-zinc-400">Run <code>php-ui add {{ $page }}</code> to see it here.</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Code Tab -->
            <div x-show="tab === 'code'" class="relative">
                <x-ui.code-snippet 
                    code="<x-ui.{{ $page }}>
    Sample Content
</x-ui.{{ $page }}>" 
                    language="blade"
                />
            </div>

            <!-- Installation Command -->
            <div class="mt-10 space-y-4">
                <h3 class="font-bold text-xl">Installation</h3>
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative rounded-lg bg-zinc-950 py-4 px-6 flex items-center justify-between border border-zinc-800">
                        <code class="font-mono text-sm text-zinc-300">
                            php-ui add {{ $page }}
                        </code>
                        <div class="flex items-center gap-2">
                            <button class="text-zinc-500 hover:text-white transition-colors" onclick="navigator.clipboard.writeText('php-ui add {{ $page }}')">
                                <x-lucide-copy class="size-4" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($page === 'theming')
            <!-- Theming Page Content (Keep existing content) -->
            <div class="space-y-10">
                <section class="space-y-4">
                    <h2 class="text-2xl font-bold tracking-tight">Introduction</h2>
                    <p class="text-zinc-500 dark:text-zinc-400">
                        PHP-UI uses Tailwind CSS variables for styling. This means you can easily customize the look and feel of your application by updating your CSS variables.
                    </p>
                </section>
                <!-- ... (Rest of theming content) ... -->
                 <section class="space-y-4">
                    <h2 class="text-2xl font-bold tracking-tight">Tailwind v4 Configuration</h2>
                    <x-ui.code-snippet code="@theme { --color-primary: var(--color-blue-600); }" language="css" />
                </section>
            </div>
        @else
            <!-- Installation Guide (Keep existing content) -->
             <div class="space-y-10">
                <section class="space-y-4">
                    <div class="flex items-center gap-2">
                        <x-ui.badge variant="secondary" class="rounded-full h-6 w-6 flex items-center justify-center p-0">1</x-ui.badge>
                        <h2 class="text-2xl font-bold tracking-tight">Requirement</h2>
                    </div>
                    <ul class="list-disc list-inside space-y-2 text-zinc-500 dark:text-zinc-400 ml-4">
                        <li>Laravel 10.0+</li>
                        <li>PHP 8.2+</li>
                        <li>Tailwind CSS v4</li>
                    </ul>
                </section>
                 <section class="space-y-4">
                    <div class="flex items-center gap-2">
                        <x-ui.badge variant="secondary" class="rounded-full h-6 w-6 flex items-center justify-center p-0">2</x-ui.badge>
                        <h2 class="text-2xl font-bold tracking-tight">Install</h2>
                    </div>
                    <x-ui.code-snippet code="composer require --dev jiordiviera/php-ui" language="bash" />
                </section>
            </div>
        @endif
    </div>
</x-layouts.docs>
