<x-layouts.docs>
    <div class="space-y-4">
        <h1 class="scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl">
            {{ str($page)->replace('-', ' ')->title() }}
        </h1>
        <p class="text-lg">
            @if(request()->is('docs/components/*'))
                Scaffold a {{ str($page)->replace('-', ' ') }} component into your project.
            @elseif($page === 'theming')
                Customize the look and feel of your components with CSS variables.
            @elseif($page === 'introduction')
                Welcome to PHP-UI, the shadcn/ui equivalent for Laravel developers.
            @elseif($page === 'components')
                Explore our collection of beautiful, accessible components.
            @else
                How to install and configure PHP-UI in your Laravel project.
            @endif
        </p>
    </div>

    <div class="pb-12 pt-8" x-data="{ tab: 'preview' }">
        @if(request()->is('docs/components/*'))
            <!-- Tabs Header -->
            <div class="flex items-center space-x-4 border-b border-zinc-200 dark:border-zinc-800 mb-6">
                <button @click="tab = 'preview'"
                    :class="tab === 'preview' ? 'border-zinc-900 dark:border-zinc-50 text-zinc-900 dark:text-zinc-50' : 'border-transparent text-zinc-500'"
                    class="pb-2 text-sm font-medium border-b-2 transition-colors">Preview</button>
                <button @click="tab = 'code'"
                    :class="tab === 'code' ? 'border-zinc-900 dark:border-zinc-50 text-zinc-900 dark:text-zinc-50' : 'border-transparent text-zinc-500'"
                    class="pb-2 text-sm font-medium border-b-2 transition-colors">Code</button>
            </div>

            <!-- Preview Tab -->
            <div x-show="tab === 'preview'" class="space-y-8">
                @php
                    $componentName = 'ui.' . $page;
                    $componentExists = View::exists('components.ui.' . $page);
                    $previewExists = View::exists('components.docs.previews.' . $page);
                @endphp

                @if($componentExists)
                    <!-- Main Preview Area -->
                    <div
                        class="flex items-center justify-center rounded-lg border border-zinc-200 bg-zinc-50 p-8 dark:border-zinc-800 dark:bg-zinc-900/50 min-h-[350px]">
                        @if($previewExists)
                            <x-dynamic-component :component="'docs.previews.' . $page" />
                        @else
                            {{-- Fallback générique si pas de preview dédiée --}}
                            <div class="text-center w-full min-h-[150px] flex items-center justify-center">
                                <x-dynamic-component :component="$componentName">
                                    Sample {{ str($page)->title() }}
                                </x-dynamic-component>
                            </div>
                        @endif
                    </div>
                @else
                    <div
                        class="flex items-center justify-center rounded-lg border border-zinc-200 bg-zinc-50 p-8 dark:border-zinc-800 dark:bg-zinc-900/50 min-h-[200px]">
                        <div class="text-center space-y-3">
                            <p class="text-sm text-zinc-500">Component <code>{{ $page }}</code> not found in
                                <code>resources/views/components/ui/</code>
                            </p>
                            <p class="text-xs text-zinc-400">Run <code>php-ui add {{ $page }}</code> to see it here.</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Code Tab -->
            <div x-show="tab === 'code'" class="relative">
                <x-markdown-content content="```blade
                <x-ui.{{ $page }}>
                    Sample Content
                </x-ui.{{ $page }}>" />
            </div>

            <!-- Installation Command -->
            <div class="mt-10 space-y-4">
                <h3 class="font-bold text-xl">Installation</h3>
                <div class="relative group">
                    <div class="prose prose-sm dark:prose-invert max-w-none">
                        <x-markdown-content content="```bash
                                    php-ui add {{ $page }}" />
                    </div>
                </div>
            </div>
        @elseif($page === 'theming')
            <x-docs.pages.theming />
        @elseif($page === 'introduction')
            <x-docs.pages.introduction />
        @elseif($page === 'components')
            <x-docs.pages.components />
        @else
            <x-docs.pages.installation />
        @endif
    </div>
</x-layouts.docs>
