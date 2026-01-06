<div class="w-full max-w-4xl space-y-10">
    {{-- Default --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Default</p>
        <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
            <x-ui.empty-state />
        </div>
    </div>

    {{-- Custom Title & Description --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Custom Title & Description</p>
        <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
            <x-ui.empty-state title="No projects yet"
                description="Get started by creating your first project. It only takes a few seconds."
                icon="folder-open" />
        </div>
    </div>

    {{-- With Action Button --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Action Button</p>
        <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
            <x-ui.empty-state title="No users found" description="There are no users matching your search criteria."
                icon="users" actionLabel="Add User" actionUrl="#" />
        </div>
    </div>

    {{-- Sizes --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Sizes</p>
        <div class="grid gap-4">
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" title="Small" description="Compact empty state for tight spaces."
                    icon="file" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="md" title="Medium (default)"
                    description="Standard empty state size for most use cases." icon="file" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="lg" title="Large" description="Prominent empty state for main content areas."
                    icon="file" />
            </div>
        </div>
    </div>

    {{-- Variants --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Variants</p>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" variant="default" title="Default" description="Standard styling."
                    icon="box" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" variant="primary" title="Primary" description="Accented styling."
                    icon="box" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" variant="ghost" title="Ghost" description="Subtle styling." icon="box" />
            </div>
        </div>
    </div>

    {{-- With Custom Slot --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Custom Slot</p>
        <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
            <x-ui.empty-state title="No notifications"
                description="You're all caught up! Check back later for new updates." icon="bell-off">
                <div class="flex gap-3">
                    <x-ui.button variant="outline" size="sm">Settings</x-ui.button>
                    <x-ui.button size="sm">Refresh</x-ui.button>
                </div>
            </x-ui.empty-state>
        </div>
    </div>

    {{-- Different Icons --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Different Icons</p>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" title="No messages" description="Your inbox is empty." icon="mail" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" title="No photos" description="Upload your first photo." icon="image" />
            </div>
            <div class="rounded-xl border border-zinc-200 dark:border-zinc-800">
                <x-ui.empty-state size="sm" title="Search results" description="Try a different query." icon="search" />
            </div>
        </div>
    </div>
</div>