<div class="w-full max-w-3xl space-y-10">
    {{-- Basic Carousel --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Basic</p>
        <x-ui.carousel :images="[
        'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&h=450&fit=crop',
        'https://images.unsplash.com/photo-1454496522488-7a8e488e8606?w=800&h=450&fit=crop',
        'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&h=450&fit=crop',
    ]" />
    </div>

    {{-- With Captions --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Captions</p>
        <x-ui.carousel :images="[
        ['src' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?w=800&h=450&fit=crop', 'alt' => 'Mountain', 'caption' => 'Majestic mountain peaks at sunrise'],
        ['src' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=800&h=450&fit=crop', 'alt' => 'Lake', 'caption' => 'Serene lake reflecting the sky'],
        ['src' => 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=800&h=450&fit=crop', 'alt' => 'Forest', 'caption' => 'Misty forest in the morning'],
    ]" />
    </div>

    {{-- Autoplay --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Autoplay (3s interval)</p>
        <x-ui.carousel :autoplay="true" :interval="3000" :images="[
        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=450&fit=crop',
        'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=800&h=450&fit=crop',
        'https://images.unsplash.com/photo-1433086966358-54859d0ed716?w=800&h=450&fit=crop',
    ]" />
    </div>

    {{-- Square Aspect Ratio --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Square (1:1)</p>
        <div class="max-w-sm mx-auto">
            <x-ui.carousel aspectRatio="1/1" :images="[
        'https://images.unsplash.com/photo-1518173946687-a4c036bc8df0?w=400&h=400&fit=crop',
        'https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=400&h=400&fit=crop',
    ]" />
        </div>
    </div>

    {{-- Without Dots --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Without Dots</p>
        <x-ui.carousel :showDots="false" :images="[
        'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=800&h=450&fit=crop',
        'https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=800&h=450&fit=crop',
    ]" />
    </div>
</div>