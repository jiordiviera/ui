<div
    class="container mx-auto flex-1 items-start md:grid md:grid-cols-[220px_minmax(0,1fr)] md:gap-6 lg:grid-cols-[240px_minmax(0,1fr)] lg:gap-10 px-4 md:px-6">
    <aside
        class="fixed no-scrollbar top-14 z-30 -ml-2 hidden h-[calc(100vh-3.5rem)] w-full shrink-0 md:sticky md:block overflow-y-auto border-r border-border pr-4">
        <div class="py-6 pr-6 lg:py-8">
            {{-- Getting Started Section --}}
            <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">
                {{ get_getting_started_title() }}
            </h4>
            <div class="grid grid-flow-row auto-rows-max text-sm">
                @foreach (get_getting_started_pages() as $slug => $title)
                    <a href="{{ route('docs.show', ['page' => $slug]) }}"
                        class="group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline {{ is_docs_page_active($slug) ? 'font-medium text-foreground' : 'text-foreground/80' }}">
                        {{ $title }}
                    </a>
                @endforeach
            </div>

            {{-- Components Section --}}
            <h4 class="mb-1 mt-8 rounded-md px-2 py-1 text-sm font-semibold">
                {{ get_components_title() }}
            </h4>
            <div class="grid grid-flow-row auto-rows-max text-sm">
                @foreach (get_component_items() as $component)
                    <a href="{{ route('components.show', str($component)->slug()) }}"
                        class="group flex w-full items-center rounded-md border border-transparent px-2 py-1 hover:underline {{ is_component_active($component) ? 'font-medium text-foreground' : 'text-foreground/80' }}">
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