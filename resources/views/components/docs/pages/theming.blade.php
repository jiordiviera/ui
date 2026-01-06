<div class="space-y-12">
    {{-- Introduction Section --}}
    <section class="space-y-4">
        <h2 class="text-2xl font-bold tracking-tight">Introduction</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP-UI uses CSS custom properties (variables) combined with Tailwind CSS v4's <code
                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">@theme</code> directive for styling.
            This means you can easily customize the look and feel of your application by updating a few CSS variables.
        </p>
        <x-ui.alert variant="default" title="Tailwind CSS v4" icon="info">
            PHP-UI is built for Tailwind CSS v4 which uses CSS-first configuration. All theming is done in your CSS
            file, not in a JavaScript config.
        </x-ui.alert>
    </section>

    {{-- Color System Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color System</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP-UI uses semantic color variables that automatically adapt to light and dark modes. Here are the main
            color tokens:
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
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-background</code></td>
                        <td class="py-3 px-4 text-zinc-500">Page background color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-background"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-foreground</code></td>
                        <td class="py-3 px-4 text-zinc-500">Primary text color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-foreground"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-primary</code></td>
                        <td class="py-3 px-4 text-zinc-500">Primary brand color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-primary"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-secondary</code></td>
                        <td class="py-3 px-4 text-zinc-500">Secondary color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-secondary"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-muted</code></td>
                        <td class="py-3 px-4 text-zinc-500">Muted backgrounds</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-muted"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-accent</code></td>
                        <td class="py-3 px-4 text-zinc-500">Accent/hover states</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-accent"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-destructive</code></td>
                        <td class="py-3 px-4 text-zinc-500">Error/destructive actions</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border border-zinc-300 dark:border-zinc-700 bg-destructive">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-border</code></td>
                        <td class="py-3 px-4 text-zinc-500">Border color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded border-2 border-border bg-transparent"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4"><code class="text-xs">--color-ring</code></td>
                        <td class="py-3 px-4 text-zinc-500">Focus ring color</td>
                        <td class="py-3 px-4">
                            <div class="size-6 rounded ring-2 ring-ring ring-offset-2 ring-offset-background"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Tailwind v4 Configuration --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Tailwind v4 Configuration</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            In Tailwind CSS v4, configuration is done directly in your CSS file using the <code
                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">@theme</code> directive. Here's a
            complete example:
        </p>

        <x-markdown-content content="```css
@import 'tailwindcss';

@theme {
    /* Primary Colors */
    --color-primary: oklch(0.55 0.22 265);
    --color-primary-foreground: oklch(0.98 0 0);

    /* Secondary Colors */
    --color-secondary: oklch(0.95 0.01 265);
    --color-secondary-foreground: oklch(0.25 0.02 265);

    /* Background & Foreground */
    --color-background: oklch(1 0 0);
    --color-foreground: oklch(0.15 0.02 265);

    /* Muted */
    --color-muted: oklch(0.96 0.005 265);
    --color-muted-foreground: oklch(0.55 0.02 265);

    /* Accent */
    --color-accent: oklch(0.95 0.01 265);
    --color-accent-foreground: oklch(0.25 0.02 265);

    /* Destructive */
    --color-destructive: oklch(0.55 0.22 25);
    --color-destructive-foreground: oklch(0.98 0 0);

    /* Border & Input */
    --color-border: oklch(0.9 0.005 265);
    --color-input: oklch(0.9 0.005 265);
    --color-ring: oklch(0.55 0.22 265);

    /* Popover */
    --color-popover: oklch(1 0 0);
    --color-popover-foreground: oklch(0.15 0.02 265);

    /* Card */
    --color-card: oklch(1 0 0);
    --color-card-foreground: oklch(0.15 0.02 265);

    /* Border Radius */
    --radius: 0.5rem;
}" />
    </section>

    {{-- Dark Mode Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Dark Mode</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            PHP-UI supports dark mode out of the box. Define your dark mode colors using the <code
                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">.dark</code> selector:
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

        <x-ui.alert variant="default" title="Tip" icon="lightbulb">
            Use the <code>dark:</code> prefix in your HTML to apply dark mode styles, or toggle the <code>.dark</code>
            class on your <code>&lt;html&gt;</code> element.
        </x-ui.alert>
    </section>

    {{-- Customizing Components Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Customizing Components</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Since PHP-UI components are copied to your project, you have full control over their styling. Here are some
            ways to customize them:
        </p>

        <div class="space-y-6">
            {{-- Method 1 --}}
            <div class="space-y-3">
                <h3 class="text-lg font-semibold">1. Override CSS Variables</h3>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm">
                    Change the global theme by updating CSS variables in your stylesheet.
                </p>
                <x-markdown-content content="```css
@theme {
    --color-primary: oklch(0.6 0.25 145); /* Green primary */
    --radius: 1rem; /* More rounded corners */
}" />
            </div>

            {{-- Method 2 --}}
            <div class="space-y-3">
                <h3 class="text-lg font-semibold">2. Edit Component Files</h3>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm">
                    Modify the component Blade files directly in <code
                        class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">resources/views/components/ui/</code>.
                </p>
            </div>

            {{-- Method 3 --}}
            <div class="space-y-3">
                <h3 class="text-lg font-semibold">3. Add Custom Variants</h3>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm">
                    Extend components with new variants by modifying the match expressions in the component files.
                </p>
                <x-markdown-content content="```php
// In button.blade.php
\$variantClasses = match(\$variant) {
    'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'success' => 'bg-emerald-500 text-white hover:bg-emerald-600', // New variant!
    // ... other variants
};" />
            </div>
        </div>
    </section>

    {{-- Color Presets Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color Presets</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Here are some ready-to-use color presets you can copy to your stylesheet:
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Blue Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-blue-600"></div>
                    <span class="font-semibold">Blue (Default)</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.55 0.22 265);</code>
            </div>

            {{-- Green Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-emerald-600"></div>
                    <span class="font-semibold">Emerald</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.6 0.18 160);</code>
            </div>

            {{-- Purple Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-violet-600"></div>
                    <span class="font-semibold">Violet</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.55 0.25 290);</code>
            </div>

            {{-- Rose Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-rose-600"></div>
                    <span class="font-semibold">Rose</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.6 0.22 10);</code>
            </div>

            {{-- Orange Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-orange-600"></div>
                    <span class="font-semibold">Orange</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.65 0.2 45);</code>
            </div>

            {{-- Zinc Preset --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-3">
                <div class="flex items-center gap-2">
                    <div class="size-4 rounded-full bg-zinc-700"></div>
                    <span class="font-semibold">Zinc (Neutral)</span>
                </div>
                <code class="text-xs text-zinc-500 block">--color-primary: oklch(0.4 0.01 265);</code>
            </div>
        </div>
    </section>

    {{-- Typography Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Typography</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Customize fonts using Tailwind v4's font configuration:
        </p>

        <x-markdown-content content="```css
@theme {
    --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
    --font-mono: 'JetBrains Mono', ui-monospace, monospace;
}" />
    </section>

    {{-- Border Radius Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Border Radius</h2>
        <p class="text-zinc-500 dark:text-zinc-400">
            Control the roundness of components using the <code
                class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-sm">--radius</code> variable:
        </p>

        <div class="flex flex-wrap gap-4">
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: 0;"></div>
                <code class="text-xs">0</code>
            </div>
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: 0.25rem;"></div>
                <code class="text-xs">0.25rem</code>
            </div>
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: 0.5rem;"></div>
                <code class="text-xs">0.5rem</code>
            </div>
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: 0.75rem;"></div>
                <code class="text-xs">0.75rem</code>
            </div>
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary" style="border-radius: 1rem;"></div>
                <code class="text-xs">1rem</code>
            </div>
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary rounded-full"></div>
                <code class="text-xs">9999px</code>
            </div>
        </div>
    </section>
</div>