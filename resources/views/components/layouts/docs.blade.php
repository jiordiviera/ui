<x-layouts.app>
    <div class="container mx-auto flex-1 items-start md:grid md:grid-cols-[220px_minmax(0,1fr)] md:gap-6 lg:grid-cols-[240px_minmax(0,1fr)] lg:gap-10 px-4 md:px-6">
        <aside class="fixed top-14 z-30 -ml-2 hidden h-[calc(100vh-3.5rem)] w-full shrink-0 md:sticky md:block overflow-y-auto border-r border-zinc-200 dark:border-zinc-800 pr-4">
            <div class="py-6 pr-6 lg:py-8">
                <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">Getting Started</h4>
                <div class="grid grid-flow-row auto-rows-max text-sm">
                    <a href="/docs/installation" class="group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 {{ request()->is('docs/installation') ? 'font-medium text-zinc-900 dark:text-zinc-50' : '' }}">
                        Installation
                    </a>
                    <a href="/docs/theming" class="group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 {{ request()->is('docs/theming') ? 'font-medium text-zinc-900 dark:text-zinc-50' : '' }}">
                        Theming
                    </a>
                </div>

                <h4 class="mb-1 mt-8 rounded-md px-2 py-1 text-sm font-semibold">Components</h4>
                <div class="grid grid-flow-row auto-rows-max text-sm">
                    @php
                        $components = [
                            'Accordion', 'Alert', 'Avatar', 'Badge', 'Breadcrumbs', 'Button',
                            'Card', 'Checkbox', 'Collapsible', 'Combobox', 'Command',
                            'Context Menu', 'Data Table', 'Date Picker', 'Dialog', 'Dropdown Menu',
                            'Form', 'Hover Card', 'Input', 'Label', 'Menubar', 'Navigation Menu',
                            'Popover', 'Progress', 'Radio Group', 'Scroll Area', 'Select',
                            'Separator', 'Sheet', 'Skeleton', 'Slider', 'Switch', 'Table',
                            'Tabs', 'Textarea', 'Toast', 'Toggle', 'Tooltip',
                        ];
                        // Filter components that actually exist in php-ui stubs based on previous ls command
                        $available = [
                            'Accordion', 'Alert', 'Avatar', 'Badge', 'Breadcrumbs', 'Button',
                            'Carousel', 'Command Palette', 'Data Table', 'Date Picker', 'Drawer',
                            'Dropdown', 'Empty State', 'File Upload', 'Input', 'Kbd', 'Modal',
                            'Popover', 'Progress Bar', 'Progress Steps', 'Range Slider', 'Rating',
                            'Skeleton', 'Sortable List', 'Stat Card', 'Stepper', 'Tabs', 'Timeline',
                            'Toast', 'Toggle', 'Tooltip'
                        ];
                        sort($available);
                    @endphp

                    @foreach ($available as $component)
                        <a href="/docs/components/{{ str($component)->slug() }}" class="group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 {{ request()->is('docs/components/' . str($component)->slug()) ? 'font-medium text-zinc-900 dark:text-zinc-50' : '' }}">
                            {{ $component }}
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
        
        <main class="relative py-6 lg:gap-10 lg:py-8 xl:grid xl:grid-cols-[1fr_300px]">
            <div class="mx-auto w-full min-w-0">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layouts.app>
