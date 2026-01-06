<div class="w-full max-w-2xl space-y-8">
    {{-- Basic Breadcrumbs --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Basic</p>
        <x-ui.breadcrumbs :items="[
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'Products', 'url' => '#'],
        ['label' => 'Category', 'url' => '#'],
        ['label' => 'Current Page'],
    ]" />
    </div>

    {{-- With Different Separators --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Custom Separator (slash)</p>
        <x-ui.breadcrumbs separator="slash" :items="[
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'Docs', 'url' => '#'],
        ['label' => 'Components'],
    ]" />
    </div>

    {{-- Arrow Right Separator --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Arrow Separator</p>
        <x-ui.breadcrumbs separator="arrow-right" :items="[
        ['label' => 'Dashboard', 'url' => '#'],
        ['label' => 'Settings', 'url' => '#'],
        ['label' => 'Profile'],
    ]" />
    </div>

    {{-- Simple (Two Items) --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Simple</p>
        <x-ui.breadcrumbs :items="[
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'About'],
    ]" />
    </div>

    {{-- Long Path --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Long Path</p>
        <x-ui.breadcrumbs :items="[
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'Library', 'url' => '#'],
        ['label' => 'Data', 'url' => '#'],
        ['label' => 'Files', 'url' => '#'],
        ['label' => 'Document.pdf'],
    ]" />
    </div>
</div>