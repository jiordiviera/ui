<div class="w-full max-w-2xl space-y-8">
    {{-- Basic Date Picker --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Basic</p>
        <div class="max-w-xs">
            <x-ui.date-picker placeholder="Sélectionner une date" />
        </div>
    </div>

    {{-- Sizes --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Sizes</p>
        <div class="flex flex-col gap-3 max-w-xs">
            <x-ui.date-picker size="sm" placeholder="Small" />
            <x-ui.date-picker size="md" placeholder="Medium (default)" />
            <x-ui.date-picker size="lg" placeholder="Large" />
        </div>
    </div>

    {{-- With Min/Max Date --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Min/Max Date</p>
        <div class="max-w-xs">
            <x-ui.date-picker placeholder="Date (limited range)" minDate="2026-01-01" maxDate="2026-12-31" />
        </div>
        <p class="text-xs text-zinc-400 dark:text-zinc-500">Only dates in 2026 are selectable</p>
    </div>

    {{-- Not Clearable --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Not Clearable</p>
        <div class="max-w-xs">
            <x-ui.date-picker placeholder="Cannot clear" :clearable="false" />
        </div>
    </div>

    {{-- Disabled --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Disabled</p>
        <div class="max-w-xs">
            <x-ui.date-picker placeholder="Disabled" :disabled="true" />
        </div>
    </div>

    {{-- Custom Icon --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Custom Icon</p>
        <div class="max-w-xs">
            <x-ui.date-picker placeholder="Date de naissance" icon="cake" />
        </div>
    </div>
</div>