<div class="w-full max-w-3xl space-y-8">
    {{-- Sizes --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Sizes</p>
        <div class="flex flex-wrap items-end gap-4">
            <x-ui.avatar size="xs" name="John Doe" />
            <x-ui.avatar size="sm" name="John Doe" />
            <x-ui.avatar size="md" name="John Doe" />
            <x-ui.avatar size="lg" name="John Doe" />
            <x-ui.avatar size="xl" name="John Doe" />
            <x-ui.avatar size="2xl" name="John Doe" />
        </div>
    </div>

    {{-- With Image --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Image</p>
        <div class="flex flex-wrap items-center gap-4">
            <x-ui.avatar src="https://i.pravatar.cc/150?img=1" alt="User 1" />
            <x-ui.avatar src="https://i.pravatar.cc/150?img=2" alt="User 2" />
            <x-ui.avatar src="https://i.pravatar.cc/150?img=3" alt="User 3" />
        </div>
    </div>

    {{-- Initials --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Initials</p>
        <div class="flex flex-wrap items-center gap-4">
            <x-ui.avatar name="John Doe" />
            <x-ui.avatar name="Alice" />
            <x-ui.avatar name="Bob Smith" />
            <x-ui.avatar name="Marie Claire Dupont" />
        </div>
    </div>

    {{-- Fallback Icon --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Fallback (no name or image)</p>
        <div class="flex flex-wrap items-center gap-4">
            <x-ui.avatar />
            <x-ui.avatar size="lg" />
        </div>
    </div>

    {{-- Shapes --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Shapes</p>
        <div class="flex flex-wrap items-center gap-4">
            <x-ui.avatar shape="circle" name="Circle" />
            <x-ui.avatar shape="square" name="Square" />
            <x-ui.avatar shape="rounded" name="Rounded" />
        </div>
    </div>

    {{-- Status --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Status Indicator</p>
        <div class="flex flex-wrap items-center gap-4">
            <x-ui.avatar name="Online" status="online" />
            <x-ui.avatar name="Offline" status="offline" />
            <x-ui.avatar name="Busy" status="busy" />
            <x-ui.avatar name="Away" status="away" />
        </div>
    </div>
</div>