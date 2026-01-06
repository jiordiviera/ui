<div class="w-full max-w-2xl space-y-6">
    {{-- Single Accordion --}}
    <div class="space-y-2">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Single (default)</p>
        <x-ui.accordion :items="[
        ['title' => 'Is it accessible?', 'content' => 'Yes. It adheres to the WAI-ARIA design pattern.'],
        ['title' => 'Is it styled?', 'content' => 'Yes. It comes with default styles that match the other components.'],
        ['title' => 'Is it animated?', 'content' => 'Yes. It uses Alpine.js x-collapse for smooth animations.'],
    ]" />
    </div>

    {{-- Multiple Accordion --}}
    <div class="space-y-2">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Multiple open</p>
        <x-ui.accordion :multiple="true" :items="[
        ['question' => 'What is PHP-UI?', 'answer' => 'PHP-UI is a collection of reusable Blade components for Laravel.'],
        ['question' => 'How do I install it?', 'answer' => 'Run <code>composer global require jiordiviera/php-ui</code> and then use <code>php-ui add</code>.'],
    ]" />
    </div>

    {{-- With Default Open --}}
    <div class="space-y-2">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Default open (first item)</p>
        <x-ui.accordion :defaultOpen="0" :items="[
        ['title' => 'This is open by default', 'content' => 'This accordion item starts expanded when the page loads.'],
        ['title' => 'Click to expand', 'content' => 'This one starts collapsed.'],
    ]" />
    </div>
</div>