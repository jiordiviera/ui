<div class="w-full max-w-3xl space-y-6">
    {{-- Positions --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Positions</p>
        <div class="flex flex-wrap gap-3">
            {{-- Left Drawer --}}
            <x-ui.drawer position="left">
                <x-slot:trigger>
                    <x-ui.button variant="outline">
                        <x-lucide-panel-left class="size-4 mr-2" />
                        Left
                    </x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Left Drawer</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">This drawer slides in from the left.</p>
                </div>
            </x-ui.drawer>

            {{-- Right Drawer --}}
            <x-ui.drawer position="right">
                <x-slot:trigger>
                    <x-ui.button variant="outline">
                        <x-lucide-panel-right class="size-4 mr-2" />
                        Right
                    </x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Right Drawer</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">This drawer slides in from the right.</p>
                </div>
            </x-ui.drawer>

            {{-- Top Drawer --}}
            <x-ui.drawer position="top" height="md">
                <x-slot:trigger>
                    <x-ui.button variant="outline">
                        <x-lucide-panel-top class="size-4 mr-2" />
                        Top
                    </x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Top Drawer</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">This drawer slides in from the top.</p>
                </div>
            </x-ui.drawer>

            {{-- Bottom Drawer --}}
            <x-ui.drawer position="bottom" height="md">
                <x-slot:trigger>
                    <x-ui.button variant="outline">
                        <x-lucide-panel-bottom class="size-4 mr-2" />
                        Bottom
                    </x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Bottom Drawer</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">This drawer slides in from the bottom.</p>
                </div>
            </x-ui.drawer>
        </div>
    </div>

    {{-- Widths --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Widths (Left/Right)</p>
        <div class="flex flex-wrap gap-3">
            <x-ui.drawer position="right" width="sm">
                <x-slot:trigger>
                    <x-ui.button variant="secondary" size="sm">Small (w-64)</x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Small Width</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">Small drawer width.</p>
                </div>
            </x-ui.drawer>

            <x-ui.drawer position="right" width="lg">
                <x-slot:trigger>
                    <x-ui.button variant="secondary" size="sm">Large (w-96)</x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Large Width</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">Large drawer width.</p>
                </div>
            </x-ui.drawer>

            <x-ui.drawer position="right" width="xl">
                <x-slot:trigger>
                    <x-ui.button variant="secondary" size="sm">XL (w-[28rem])</x-ui.button>
                </x-slot:trigger>
                <x-slot:header>Extra Large Width</x-slot:header>
                <div class="p-6">
                    <p class="text-muted-foreground">Extra large drawer width.</p>
                </div>
            </x-ui.drawer>
        </div>
    </div>

    {{-- With Footer --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Header & Footer</p>
        <x-ui.drawer position="right" width="lg">
            <x-slot:trigger>
                <x-ui.button>Open Drawer with Footer</x-ui.button>
            </x-slot:trigger>
            <x-slot:header>Edit Profile</x-slot:header>
            <div class="p-6 space-y-4">
                <x-ui.input label="Name" placeholder="Enter your name" />
                <x-ui.input label="Email" type="email" placeholder="Enter your email" />
            </div>
            <x-slot:footer>
                <div class="flex justify-end gap-3">
                    <x-ui.button variant="outline" @click="close()">Cancel</x-ui.button>
                    <x-ui.button>Save Changes</x-ui.button>
                </div>
            </x-slot:footer>
        </x-ui.drawer>
    </div>

    {{-- No Overlay --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Without Overlay</p>
        <x-ui.drawer position="right" :overlay="false">
            <x-slot:trigger>
                <x-ui.button variant="ghost">No Overlay</x-ui.button>
            </x-slot:trigger>
            <x-slot:header>No Overlay</x-slot:header>
            <div class="p-6">
                <p class="text-muted-foreground">This drawer has no background overlay.</p>
            </div>
        </x-ui.drawer>
    </div>
</div>