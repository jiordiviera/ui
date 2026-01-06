<div class="flex flex-col gap-8 items-center">
    {{-- Variants --}}
    <div class="flex flex-wrap gap-4 justify-center items-center">
        <x-ui.button variant="primary">Primary</x-ui.button>
        <x-ui.button variant="secondary">Secondary</x-ui.button>
        <x-ui.button variant="outline">Outline</x-ui.button>
        <x-ui.button variant="ghost">Ghost</x-ui.button>
        <x-ui.button variant="destructive">Destructive</x-ui.button>
        <x-ui.button variant="link">Link</x-ui.button>
    </div>

    {{-- Sizes --}}
    <div class="flex flex-wrap gap-4 justify-center items-center">
        <x-ui.button size="sm">Small</x-ui.button>
        <x-ui.button size="md">Medium</x-ui.button>
        <x-ui.button size="lg">Large</x-ui.button>
        <x-ui.button size="icon" icon="plus" />
    </div>

    {{-- With Icon & Loading --}}
    <div class="flex flex-wrap gap-4 justify-center items-center">
        <x-ui.button icon="mail">Login with Email</x-ui.button>
        <x-ui.button loading>Loading</x-ui.button>
    </div>
</div>