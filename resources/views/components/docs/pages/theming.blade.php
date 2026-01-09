<div class="space-y-12">

    {{-- Introduction Section --}}
    <section class="space-y-4">
        <h2 class="text-2xl font-bold tracking-tight">Introduction</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP UI uses CSS custom properties combined with Tailwind CSS styling. By editing a few variables you can
            completely transform the look and feel of your application without touching component code.
        </p>
        <x-ui.alert variant="default" title="Tailwind CSS Support" icon="info">
            PHP UI works with <strong>Tailwind CSS v3 and Tailwind CSS v4</strong>. v4 introduces a CSS first
            configuration flow controlled through your stylesheet using the
            <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">@theme</code> directive.
        </x-ui.alert>
        <p class="text-sm text-zinc-500 dark:text-zinc-400">
            Learn more at
            <a href="https://tailwindcss.com?utm_source=php-ui-docs"
               target="_blank"
               class="underline text-primary">tailwindcss.com</a>.
        </p>
    </section>

    {{-- Color System Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color System</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP UI exposes semantic color tokens that automatically adapt to light and dark mode.
        </p>

        {{-- Color Tokens Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-zinc-200 dark:border-zinc-800">
                        <th class="text-left py-3 px-4 font-semibold text-foreground">Variable</th>
                        <th class="text-left py-3 px-4 font-semibold text-foreground">Description</th>
                        <th class="text-left py-3 px-4 font-semibold text-foreground">Preview</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @foreach([
                        ['background', 'Page background', 'bg-background'],
                        ['foreground', 'Primary text color', 'bg-foreground'],
                        ['primary', 'Brand primary', 'bg-primary'],
                        ['secondary', 'Secondary color', 'bg-secondary'],
                        ['muted', 'Muted surfaces', 'bg-muted'],
                        ['accent', 'Interactive and hovers', 'bg-accent'],
                        ['destructive', 'Errors and destructive actions', 'bg-destructive'],
                        ['border', 'Border color', 'border-border bg-transparent border-2'],
                        ['ring', 'Focus ring color', 'ring-2 ring-ring ring-offset-2 ring-offset-background'],
                    ] as [$var, $desc, $class])
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-{{ $var }}</code></td>
                        <td class="py-3 px-4 text-zinc-500">{{ $desc }}</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 {{ $class }}"></div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    {{-- Tailwind v4 Configuration --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Tailwind CSS Configuration</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            With Tailwind CSS v4 your theme configuration lives directly in your stylesheet using
            <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">@theme</code>.
        </p>

        <x-ui.alert variant="default" title="Helpful tool" icon="palette">
            If you need help generating OKLCH palettes check
            <a href="https://tweakcn.com?utm_source=php-ui-docs"
               target="_blank"
               class="underline text-primary">TweakCN</a>.
            It is inspired by modern component libraries and is perfect for crafting brand colors visually.
        </x-ui.alert>

        <x-markdown-content content="```css
@import 'tailwindcss';

@theme {
    --color-primary: oklch(0.55 0.22 265);
    --color-primary-foreground: oklch(0.98 0 0);

    --color-secondary: oklch(0.95 0.01 265);
    --color-secondary-foreground: oklch(0.25 0.02 265);

    --color-background: oklch(1 0 0);
    --color-foreground: oklch(0.15 0.02 265);

    --color-muted: oklch(0.96 0.005 265);
    --color-muted-foreground: oklch(0.55 0.02 265);

    --color-accent: oklch(0.95 0.01 265);
    --color-accent-foreground: oklch(0.25 0.02 265);

    --color-destructive: oklch(0.55 0.22 25);
    --color-destructive-foreground: oklch(0.98 0 0);

    --color-border: oklch(0.9 0.005 265);
    --color-input: oklch(0.9 0.005 265);
    --color-ring: oklch(0.55 0.22 265);

    --color-popover: oklch(1 0 0);
    --color-popover-foreground: oklch(0.15 0.02 265);

    --color-card: oklch(1 0 0);
    --color-card-foreground: oklch(0.15 0.02 265);

    --radius: 0.5rem;
}" />
    </section>

    {{-- Dark Mode Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Dark Mode</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Dark mode works by redefining the same CSS tokens inside a
            <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">.dark</code>
            scope.
        </p>

        <x-markdown-content content="```css
.dark {
    --color-primary: oklch(0.7 0.18 265);
    --color-primary-foreground: oklch(0.15 0.02 265);

    --color-background: oklch(0.15 0.02 265);
    --color-foreground: oklch(0.95 0 0);

    --color-muted: oklch(0.25 0.02 265);
    --color-muted-foreground: oklch(0.65 0.02 265);

    --color-accent: oklch(0.25 0.02 265);
    --color-accent-foreground: oklch(0.95 0 0);

    --color-border: oklch(0.3 0.02 265);
    --color-input: oklch(0.3 0.02 265);
    --color-ring: oklch(0.7 0.18 265);

    --color-popover: oklch(0.18 0.02 265);
    --color-popover-foreground: oklch(0.95 0 0);

    --color-card: oklch(0.18 0.02 265);
    --color-card-foreground: oklch(0.95 0 0);
}" />

        <p class="text-sm text-zinc-500 dark:text-zinc-400">
            Tailwind dark mode docs:
            <a href="https://tailwindcss.com/docs/dark-mode?utm_source=php-ui-docs"
               target="_blank"
               class="underline text-primary">tailwindcss.com/docs/dark-mode</a>
        </p>
    </section>

    {{-- Customizing Components Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Customizing Components</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP UI copies Blade components into your app so you fully own them. Modify anything you like.
        </p>

        <x-ui.alert variant="default" title="Full control" icon="wrench">
            This model is inspired by modern drop in UI kits. No black box. If you want to tweak something you open the file and go wild.
        </x-ui.alert>

        <div class="space-y-6">
            <div class="space-y-3">
                <h3 class="text-lg font-semibold">1. Override CSS Variables</h3>
                <x-markdown-content content="```css
@theme {
    --color-primary: oklch(0.6 0.25 145);
    --radius: 1rem;
}" />
            </div>

            <div class="space-y-3">
                <h3 class="text-lg font-semibold">2. Edit Component Files</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">
                    Modify the Blade files under
                    <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">resources/views/components/ui/</code>.
                </p>
            </div>

            <div class="space-y-3">
                <h3 class="text-lg font-semibold">3. Add Custom Variants</h3>
                <x-markdown-content content="```php
\$variantClasses = match(\$variant) {
    'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'success' => 'bg-emerald-500 text-white hover:bg-emerald-600',
};" />
            </div>
        </div>
    </section>

    {{-- Color Presets Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color Presets</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Quick preset suggestions you can paste into your theme.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach([
                ['Blue', 'bg-blue-600', '--color-primary: oklch(0.55 0.22 265);'],
                ['Emerald', 'bg-emerald-600', '--color-primary: oklch(0.6 0.18 160);'],
                ['Violet', 'bg-violet-600', '--color-primary: oklch(0.55 0.25 290);'],
                ['Rose', 'bg-rose-600', '--color-primary: oklch(0.6 0.22 10);'],
                ['Orange', 'bg-orange-600', '--color-primary: oklch(0.65 0.2 45);'],
                ['Zinc', 'bg-zinc-700', '--color-primary: oklch(0.4 0.01 265);'],
            ] as [$name, $bg, $code])
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full {{ $bg }}"></div>
                    <span class="font-semibold">{{ $name }}</span>
                </div>
                <code class="text-xs text-zinc-500 block">{{ $code }}</code>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Typography Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Typography</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Override font families directly inside your @theme block.
        </p>

        <x-markdown-content content="```css
@theme {
    --font-sans: Inter, ui-sans-serif, system-ui, sans-serif;
    --font-mono: JetBrains Mono, ui-monospace, monospace;
}" />
    </section>

    {{-- Border Radius Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Border Radius</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP UI uses a single variable called <code>--radius</code> which controls all rounding by default.
        </p>

        <div class="flex flex-wrap gap-4">
            @foreach([
                ['0', '0'],
                ['0.25rem', '0.25rem'],
                ['0.5rem', '0.5rem'],
                ['0.75rem', '0.75rem'],
                ['1rem', '1rem'],
                ['9999px', '9999px'],
            ] as [$label, $radius])
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: {{ $radius }}"></div>
                <code class="text-xs">{{ $label }}</code>
            </div>
            @endforeach
        </div>
    </section>
</div>
