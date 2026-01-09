<div class="space-y-12" x-data="{ tailwindVersion: 'v4' }">

    {{-- Introduction Section --}}
    <section class="space-y-4">
        <h2 class="text-2xl font-bold tracking-tight">Introduction</h2>
        <p class="text-muted-foreground">
            PHP UI uses CSS custom properties (variables) combined with Tailwind CSS for styling. By editing a few variables you can completely transform the look and feel of your application without touching component code.
        </p>
        <div class="grid sm:grid-cols-2 gap-4">
            <div class="p-4 rounded-xl border border-border bg-card space-y-2">
                <div class="flex items-center gap-2">
                    <x-lucide-check-circle class="size-5 text-primary" />
                    <span class="font-semibold text-card-foreground">Tailwind CSS v3</span>
                </div>
                <p class="text-sm text-muted-foreground">Configuration via <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-xs">tailwind.config.js</code></p>
            </div>
            <div class="p-4 rounded-xl border border-border bg-card space-y-2">
                <div class="flex items-center gap-2">
                    <x-lucide-check-circle class="size-5 text-primary" />
                    <span class="font-semibold text-card-foreground">Tailwind CSS v4</span>
                </div>
                <p class="text-sm text-muted-foreground">CSS-first configuration via <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-xs">@theme</code> directive</p>
            </div>
        </div>
        <x-ui.alert variant="default" title="Helpful Tools" icon="palette">
            Need help generating color palettes? Check out
            <a href="https://tweakcn.com?utm_source=php-ui-docs" target="_blank" class="underline text-primary font-medium">TweakCN</a> for OKLCH colors or
            <a href="https://uicolors.app?utm_source=php-ui-docs" target="_blank" class="underline text-primary font-medium">UI Colors</a> for HSL palettes.
        </x-ui.alert>
    </section>

    {{-- Version Selector --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Select Your Tailwind Version</h2>
        <p class="text-muted-foreground">
            Choose your Tailwind CSS version to see the corresponding configuration examples.
        </p>
        <div class="flex gap-2">
            <button
                @click="tailwindVersion = 'v3'"
                :class="tailwindVersion === 'v3' ? 'bg-primary text-primary-foreground' : 'bg-muted text-muted-foreground hover:bg-accent hover:text-accent-foreground'"
                class="px-4 py-2 rounded-lg text-sm font-medium transition-colors"
            >
                Tailwind v3
            </button>
            <button
                @click="tailwindVersion = 'v4'"
                :class="tailwindVersion === 'v4' ? 'bg-primary text-primary-foreground' : 'bg-muted text-muted-foreground hover:bg-accent hover:text-accent-foreground'"
                class="px-4 py-2 rounded-lg text-sm font-medium transition-colors"
            >
                Tailwind v4
            </button>
        </div>
    </section>

    {{-- Color System Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color System</h2>
        <p class="text-muted-foreground">
            PHP UI uses semantic color tokens that automatically adapt to light and dark mode. These tokens are used throughout all components.
        </p>

        {{-- Color Tokens Visual Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach([
                ['background', 'Background', 'Page background color', 'bg-background', 'text-foreground'],
                ['foreground', 'Foreground', 'Primary text color', 'bg-foreground', 'text-background'],
                ['primary', 'Primary', 'Brand primary color', 'bg-primary', 'text-primary-foreground'],
                ['primary-foreground', 'Primary Foreground', 'Text on primary', 'bg-primary-foreground', 'text-primary'],
                ['secondary', 'Secondary', 'Secondary elements', 'bg-secondary', 'text-secondary-foreground'],
                ['secondary-foreground', 'Secondary Foreground', 'Text on secondary', 'bg-secondary-foreground', 'text-secondary'],
                ['muted', 'Muted', 'Muted backgrounds', 'bg-muted', 'text-muted-foreground'],
                ['muted-foreground', 'Muted Foreground', 'Subdued text', 'bg-muted-foreground', 'text-muted'],
                ['accent', 'Accent', 'Hover/interactive states', 'bg-accent', 'text-accent-foreground'],
                ['accent-foreground', 'Accent Foreground', 'Text on accent', 'bg-accent-foreground', 'text-accent'],
                ['destructive', 'Destructive', 'Errors & destructive actions', 'bg-destructive', 'text-destructive-foreground'],
                ['destructive-foreground', 'Destructive Foreground', 'Text on destructive', 'bg-destructive-foreground', 'text-destructive'],
            ] as [$var, $name, $desc, $bgClass, $textClass])
            <div class="rounded-xl border border-border overflow-hidden">
                <div class="h-16 {{ $bgClass }} flex items-center justify-center">
                    <span class="text-sm font-medium {{ $textClass }}">Aa</span>
                </div>
                <div class="p-3 bg-card">
                    <p class="font-semibold text-sm text-card-foreground">{{ $name }}</p>
                    <p class="text-xs text-muted-foreground">{{ $desc }}</p>
                    <code class="text-xs text-primary mt-1 block">--color-{{ $var }}</code>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Additional Tokens --}}
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Additional Tokens</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-border">
                            <th class="text-left py-3 px-4 font-semibold text-foreground">Variable</th>
                            <th class="text-left py-3 px-4 font-semibold text-foreground">Description</th>
                            <th class="text-left py-3 px-4 font-semibold text-foreground">Usage</th>
                            <th class="text-left py-3 px-4 font-semibold text-foreground">Preview</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        <tr>
                            <td class="py-3 px-4"><code class="text-xs bg-muted px-1.5 py-0.5 rounded">--color-border</code></td>
                            <td class="py-3 px-4 text-muted-foreground">Default border color</td>
                            <td class="py-3 px-4"><code class="text-xs text-primary">border-border</code></td>
                            <td class="py-3 px-4"><div class="size-6 rounded border-2 border-border bg-background"></div></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4"><code class="text-xs bg-muted px-1.5 py-0.5 rounded">--color-input</code></td>
                            <td class="py-3 px-4 text-muted-foreground">Input border color</td>
                            <td class="py-3 px-4"><code class="text-xs text-primary">border-input</code></td>
                            <td class="py-3 px-4"><div class="size-6 rounded border-2 border-input bg-background"></div></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4"><code class="text-xs bg-muted px-1.5 py-0.5 rounded">--color-ring</code></td>
                            <td class="py-3 px-4 text-muted-foreground">Focus ring color</td>
                            <td class="py-3 px-4"><code class="text-xs text-primary">ring-ring</code></td>
                            <td class="py-3 px-4"><div class="size-6 rounded ring-2 ring-ring ring-offset-2 ring-offset-background bg-background"></div></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4"><code class="text-xs bg-muted px-1.5 py-0.5 rounded">--color-card</code></td>
                            <td class="py-3 px-4 text-muted-foreground">Card background</td>
                            <td class="py-3 px-4"><code class="text-xs text-primary">bg-card</code></td>
                            <td class="py-3 px-4"><div class="size-6 rounded border border-border bg-card"></div></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4"><code class="text-xs bg-muted px-1.5 py-0.5 rounded">--color-popover</code></td>
                            <td class="py-3 px-4 text-muted-foreground">Popover/dropdown background</td>
                            <td class="py-3 px-4"><code class="text-xs text-primary">bg-popover</code></td>
                            <td class="py-3 px-4"><div class="size-6 rounded border border-border bg-popover shadow-sm"></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Tailwind v4 Configuration --}}
    <section x-show="tailwindVersion === 'v4'" x-cloak class="space-y-6">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="primary">Tailwind v4</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">CSS-First Configuration</h2>
        </div>
        <p class="text-muted-foreground">
            Tailwind CSS v4 introduces a CSS-first configuration approach. Your theme lives directly in your stylesheet using the <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">@theme</code> directive.
        </p>

        <x-ui.alert variant="default" title="New in v4" icon="sparkles">
            No more <code>tailwind.config.js</code> needed! Everything is configured in CSS using OKLCH colors for better color manipulation.
        </x-ui.alert>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Complete Theme Example</h3>
            <x-markdown-content content="```css
@import 'tailwindcss';

@theme {
    /* Primary - Your brand color */
    --color-primary: oklch(0.55 0.22 265);
    --color-primary-foreground: oklch(0.98 0 0);

    /* Secondary - Supporting color */
    --color-secondary: oklch(0.95 0.01 265);
    --color-secondary-foreground: oklch(0.25 0.02 265);

    /* Background & Foreground */
    --color-background: oklch(1 0 0);
    --color-foreground: oklch(0.15 0.02 265);

    /* Muted - Subtle backgrounds */
    --color-muted: oklch(0.96 0.005 265);
    --color-muted-foreground: oklch(0.55 0.02 265);

    /* Accent - Interactive states */
    --color-accent: oklch(0.95 0.01 265);
    --color-accent-foreground: oklch(0.25 0.02 265);

    /* Destructive - Errors & warnings */
    --color-destructive: oklch(0.55 0.22 25);
    --color-destructive-foreground: oklch(0.98 0 0);

    /* Borders & Inputs */
    --color-border: oklch(0.9 0.005 265);
    --color-input: oklch(0.9 0.005 265);
    --color-ring: oklch(0.55 0.22 265);

    /* Card & Popover */
    --color-card: oklch(1 0 0);
    --color-card-foreground: oklch(0.15 0.02 265);
    --color-popover: oklch(1 0 0);
    --color-popover-foreground: oklch(0.15 0.02 265);

    /* Border Radius */
    --radius: 0.5rem;

    /* Typography */
    --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
    --font-mono: 'JetBrains Mono', ui-monospace, monospace;
}" />
        </div>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Understanding OKLCH</h3>
            <p class="text-muted-foreground">
                OKLCH is a perceptually uniform color space that makes it easier to create consistent color palettes. The format is: <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">oklch(lightness chroma hue)</code>
            </p>
            <div class="grid sm:grid-cols-3 gap-4 p-4 rounded-xl border border-border bg-card">
                <div class="space-y-2">
                    <p class="font-semibold text-card-foreground">Lightness (L)</p>
                    <p class="text-sm text-muted-foreground">0 = black, 1 = white</p>
                    <div class="flex gap-1">
                        @foreach([0.1, 0.3, 0.5, 0.7, 0.9] as $l)
                        <div class="size-6 rounded" style="background: oklch({{ $l }} 0.15 265)"></div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="font-semibold text-card-foreground">Chroma (C)</p>
                    <p class="text-sm text-muted-foreground">0 = gray, 0.4 = vivid</p>
                    <div class="flex gap-1">
                        @foreach([0, 0.05, 0.1, 0.2, 0.3] as $c)
                        <div class="size-6 rounded" style="background: oklch(0.6 {{ $c }} 265)"></div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="font-semibold text-card-foreground">Hue (H)</p>
                    <p class="text-sm text-muted-foreground">0-360 degrees</p>
                    <div class="flex gap-1">
                        @foreach([0, 60, 120, 200, 280] as $h)
                        <div class="size-6 rounded" style="background: oklch(0.6 0.2 {{ $h }})"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tailwind v3 Configuration --}}
    <section x-show="tailwindVersion === 'v3'" x-cloak class="space-y-6">
        <div class="flex items-center gap-3">
            <x-ui.badge variant="secondary">Tailwind v3</x-ui.badge>
            <h2 class="text-2xl font-bold tracking-tight">JavaScript Configuration</h2>
        </div>
        <p class="text-muted-foreground">
            Tailwind CSS v3 uses a JavaScript configuration file. You'll need to extend the theme in <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">tailwind.config.js</code> and define CSS variables in your stylesheet.
        </p>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Step 1: tailwind.config.js</h3>
            <x-markdown-content content="```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                background: 'hsl(var(--background))',
                foreground: 'hsl(var(--foreground))',
                primary: {
                    DEFAULT: 'hsl(var(--primary))',
                    foreground: 'hsl(var(--primary-foreground))',
                },
                secondary: {
                    DEFAULT: 'hsl(var(--secondary))',
                    foreground: 'hsl(var(--secondary-foreground))',
                },
                muted: {
                    DEFAULT: 'hsl(var(--muted))',
                    foreground: 'hsl(var(--muted-foreground))',
                },
                accent: {
                    DEFAULT: 'hsl(var(--accent))',
                    foreground: 'hsl(var(--accent-foreground))',
                },
                destructive: {
                    DEFAULT: 'hsl(var(--destructive))',
                    foreground: 'hsl(var(--destructive-foreground))',
                },
                border: 'hsl(var(--border))',
                input: 'hsl(var(--input))',
                ring: 'hsl(var(--ring))',
                card: {
                    DEFAULT: 'hsl(var(--card))',
                    foreground: 'hsl(var(--card-foreground))',
                },
                popover: {
                    DEFAULT: 'hsl(var(--popover))',
                    foreground: 'hsl(var(--popover-foreground))',
                },
            },
            borderRadius: {
                lg: 'var(--radius)',
                md: 'calc(var(--radius) - 2px)',
                sm: 'calc(var(--radius) - 4px)',
            },
        },
    },
    plugins: [],
}" />
        </div>

        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Step 2: CSS Variables (app.css)</h3>
            <x-markdown-content content="```css
@tailwind base;
@tailwind components;
@tailwind utilities;

@layer base {
    :root {
        --background: 0 0% 100%;
        --foreground: 240 10% 10%;

        --primary: 221 83% 53%;
        --primary-foreground: 0 0% 100%;

        --secondary: 240 5% 96%;
        --secondary-foreground: 240 6% 25%;

        --muted: 240 5% 96%;
        --muted-foreground: 240 4% 46%;

        --accent: 240 5% 96%;
        --accent-foreground: 240 6% 25%;

        --destructive: 0 84% 60%;
        --destructive-foreground: 0 0% 100%;

        --border: 240 6% 90%;
        --input: 240 6% 90%;
        --ring: 221 83% 53%;

        --card: 0 0% 100%;
        --card-foreground: 240 10% 10%;

        --popover: 0 0% 100%;
        --popover-foreground: 240 10% 10%;

        --radius: 0.5rem;
    }

    .dark {
        --background: 240 10% 10%;
        --foreground: 0 0% 95%;

        --primary: 221 83% 63%;
        --primary-foreground: 240 10% 10%;

        --secondary: 240 5% 20%;
        --secondary-foreground: 0 0% 95%;

        --muted: 240 5% 20%;
        --muted-foreground: 240 5% 65%;

        --accent: 240 5% 20%;
        --accent-foreground: 0 0% 95%;

        --destructive: 0 62% 50%;
        --destructive-foreground: 0 0% 100%;

        --border: 240 5% 25%;
        --input: 240 5% 25%;
        --ring: 221 83% 63%;

        --card: 240 10% 12%;
        --card-foreground: 0 0% 95%;

        --popover: 240 10% 12%;
        --popover-foreground: 0 0% 95%;
    }
}" />
        </div>

        <x-ui.alert variant="default" title="HSL Format" icon="info">
            Tailwind v3 uses HSL values without the <code>hsl()</code> wrapper. The format is: <code>hue saturation% lightness%</code>. This allows Tailwind to apply opacity modifiers like <code>bg-primary/50</code>.
        </x-ui.alert>
    </section>

    {{-- Dark Mode Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Dark Mode</h2>
        <p class="text-muted-foreground">
            PHP UI fully supports dark mode. Colors automatically adapt when the <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">.dark</code> class is applied to your <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">&lt;html&gt;</code> element.
        </p>

        {{-- Dark Mode Preview --}}
        <div class="grid sm:grid-cols-2 gap-4">
            <div class="p-6 rounded-xl border border-border bg-background text-foreground">
                <div class="flex items-center gap-2 mb-3">
                    <x-lucide-sun class="size-5 text-primary" />
                    <span class="font-semibold">Light Mode</span>
                </div>
                <div class="space-y-2">
                    <div class="p-3 rounded-lg bg-card border border-border">
                        <p class="text-sm text-card-foreground">Card content</p>
                    </div>
                    <div class="p-3 rounded-lg bg-muted">
                        <p class="text-sm text-muted-foreground">Muted content</p>
                    </div>
                </div>
            </div>
            <div class="p-6 rounded-xl bg-[#18181b] text-[#fafafa] border border-[#27272a]">
                <div class="flex items-center gap-2 mb-3">
                    <x-lucide-moon class="size-5 text-[#3b82f6]" />
                    <span class="font-semibold">Dark Mode</span>
                </div>
                <div class="space-y-2">
                    <div class="p-3 rounded-lg bg-[#27272a] border border-[#3f3f46]">
                        <p class="text-sm text-[#fafafa]">Card content</p>
                    </div>
                    <div class="p-3 rounded-lg bg-[#27272a]">
                        <p class="text-sm text-[#a1a1aa]">Muted content</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- v4 Dark Mode --}}
        <div x-show="tailwindVersion === 'v4'" x-cloak class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Dark Mode in Tailwind v4</h3>
            <x-markdown-content content="```css
.dark {
    --color-primary: oklch(0.7 0.18 265);
    --color-primary-foreground: oklch(0.15 0.02 265);

    --color-background: oklch(0.15 0.02 265);
    --color-foreground: oklch(0.95 0 0);

    --color-secondary: oklch(0.22 0.02 265);
    --color-secondary-foreground: oklch(0.95 0 0);

    --color-muted: oklch(0.22 0.02 265);
    --color-muted-foreground: oklch(0.65 0.02 265);

    --color-accent: oklch(0.22 0.02 265);
    --color-accent-foreground: oklch(0.95 0 0);

    --color-destructive: oklch(0.55 0.2 25);
    --color-destructive-foreground: oklch(0.98 0 0);

    --color-border: oklch(0.28 0.02 265);
    --color-input: oklch(0.28 0.02 265);
    --color-ring: oklch(0.7 0.18 265);

    --color-card: oklch(0.18 0.02 265);
    --color-card-foreground: oklch(0.95 0 0);

    --color-popover: oklch(0.18 0.02 265);
    --color-popover-foreground: oklch(0.95 0 0);
}" />
        </div>

        {{-- Toggle Implementation --}}
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Implementing Dark Mode Toggle</h3>
            <x-markdown-content content="```javascript
// Simple dark mode toggle with localStorage
function toggleDarkMode() {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

// On page load, restore preference
if (localStorage.theme === 'dark' ||
    (!('theme' in localStorage) &&
     window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
}" />
        </div>

        <p class="text-sm text-muted-foreground">
            Learn more:
            <a href="https://tailwindcss.com/docs/dark-mode?utm_source=php-ui-docs" target="_blank" class="underline text-primary">Tailwind Dark Mode Documentation</a>
        </p>
    </section>

    {{-- Color Presets Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Color Presets</h2>
        <p class="text-muted-foreground">
            Ready-to-use color presets for your theme. Click to see the full configuration.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
                $presets = [
                    ['Blue', 'bg-primary', '265', 'Default preset'],
                    ['Emerald', 'bg-emerald-600', '160', 'Nature & eco themes'],
                    ['Violet', 'bg-violet-600', '290', 'Creative & artistic'],
                    ['Rose', 'bg-rose-600', '10', 'Warm & friendly'],
                    ['Orange', 'bg-orange-600', '45', 'Energetic & bold'],
                    ['Cyan', 'bg-cyan-600', '195', 'Tech & modern'],
                ];
            @endphp
            @foreach($presets as [$name, $bgClass, $hue, $desc])
            <div class="group rounded-xl border border-border overflow-hidden hover:border-primary/50 transition-colors cursor-pointer"
                 x-data="{ showCode: false }"
                 @click="showCode = !showCode">
                <div class="h-20 {{ $bgClass }} flex items-center justify-center">
                    <span class="text-white font-bold text-lg">{{ $name }}</span>
                </div>
                <div class="p-4 bg-card">
                    <p class="text-sm text-muted-foreground">{{ $desc }}</p>
                    <div x-show="showCode" x-cloak x-transition class="mt-3 p-2 rounded bg-muted">
                        <code class="text-xs text-muted-foreground block" x-show="tailwindVersion === 'v4'">--color-primary: oklch(0.55 0.22 {{ $hue }});</code>
                        <code class="text-xs text-muted-foreground block" x-show="tailwindVersion === 'v3'">--primary: {{ $hue == '265' ? '221' : ($hue == '160' ? '160' : ($hue == '290' ? '270' : ($hue == '10' ? '350' : ($hue == '45' ? '25' : '190')))) }} 83% 53%;</code>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Full Theme Preset --}}
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-foreground">Complete Emerald Theme</h3>
            <p class="text-sm text-muted-foreground">Example of a complete green/emerald theme preset:</p>

            <div x-show="tailwindVersion === 'v4'" x-cloak>
                <x-markdown-content content="```css
@theme {
    --color-primary: oklch(0.6 0.18 160);
    --color-primary-foreground: oklch(0.98 0 0);

    --color-secondary: oklch(0.95 0.02 160);
    --color-secondary-foreground: oklch(0.25 0.05 160);

    --color-accent: oklch(0.92 0.03 160);
    --color-accent-foreground: oklch(0.25 0.05 160);

    --color-ring: oklch(0.6 0.18 160);
}

.dark {
    --color-primary: oklch(0.7 0.15 160);
    --color-ring: oklch(0.7 0.15 160);
}" />
            </div>

            <div x-show="tailwindVersion === 'v3'" x-cloak>
                <x-markdown-content content="```css
:root {
    --primary: 160 84% 39%;
    --primary-foreground: 0 0% 100%;

    --secondary: 160 20% 95%;
    --secondary-foreground: 160 30% 25%;

    --accent: 160 30% 90%;
    --accent-foreground: 160 30% 25%;

    --ring: 160 84% 39%;
}

.dark {
    --primary: 160 70% 50%;
    --ring: 160 70% 50%;
}" />
            </div>
        </div>
    </section>

    {{-- Typography Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Typography</h2>
        <p class="text-muted-foreground">
            Configure fonts to match your brand identity.
        </p>

        <div class="grid sm:grid-cols-2 gap-6">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground">Sans-serif (Body Text)</h3>
                <div class="p-4 rounded-xl border border-border bg-card">
                    <p class="text-2xl font-bold text-card-foreground">The quick brown fox</p>
                    <p class="text-muted-foreground">jumps over the lazy dog.</p>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground">Monospace (Code)</h3>
                <div class="p-4 rounded-xl border border-border bg-card font-mono">
                    <p class="text-2xl font-bold text-card-foreground">const x = 42;</p>
                    <p class="text-muted-foreground">console.log(x);</p>
                </div>
            </div>
        </div>

        <div x-show="tailwindVersion === 'v4'" x-cloak>
            <x-markdown-content content="```css
@theme {
    --font-sans: 'Inter', 'SF Pro Display', ui-sans-serif, system-ui, sans-serif;
    --font-mono: 'JetBrains Mono', 'Fira Code', ui-monospace, monospace;
}" />
        </div>

        <div x-show="tailwindVersion === 'v3'" x-cloak>
            <x-markdown-content content="```javascript
// tailwind.config.js
module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'SF Pro Display', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', 'Fira Code', ...defaultTheme.fontFamily.mono],
            },
        },
    },
}" />
        </div>
    </section>

    {{-- Border Radius Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Border Radius</h2>
        <p class="text-muted-foreground">
            The <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">--radius</code> variable controls the base border radius used throughout components.
        </p>

        <div class="flex flex-wrap gap-6">
            @foreach([
                ['0', 'Sharp', '0'],
                ['0.25rem', 'Subtle', '0.25rem'],
                ['0.5rem', 'Default', '0.5rem'],
                ['0.75rem', 'Rounded', '0.75rem'],
                ['1rem', 'Large', '1rem'],
                ['9999px', 'Pill', '9999px'],
            ] as [$value, $label, $radius])
            <div class="text-center space-y-2">
                <div class="size-16 bg-primary flex items-center justify-center" style="border-radius: {{ $radius }}">
                    <span class="text-primary-foreground text-xs font-medium">{{ $label }}</span>
                </div>
                <code class="text-xs text-muted-foreground">{{ $value }}</code>
            </div>
            @endforeach
        </div>

        <x-markdown-content content="```css
/* Change this value to update all components */
--radius: 0.75rem;

/* Components use calculated values */
.rounded-lg { border-radius: var(--radius); }
.rounded-md { border-radius: calc(var(--radius) - 2px); }
.rounded-sm { border-radius: calc(var(--radius) - 4px); }" />
    </section>

    {{-- Customizing Components Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Customizing Components</h2>
        <p class="text-muted-foreground">
            PHP UI copies Blade components directly into your project. You have full ownership and can modify anything.
        </p>

        <x-ui.alert variant="default" title="Full Control" icon="wrench">
            Unlike npm packages, PHP UI components live in your codebase. No abstractions, no black boxes.
        </x-ui.alert>

        <div class="space-y-8">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground flex items-center gap-2">
                    <span class="size-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">1</span>
                    Override CSS Variables
                </h3>
                <p class="text-sm text-muted-foreground">Change the global theme by updating CSS variables. All components automatically update.</p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground flex items-center gap-2">
                    <span class="size-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">2</span>
                    Edit Component Files
                </h3>
                <p class="text-sm text-muted-foreground">
                    Modify Blade files in <code class="px-1.5 py-0.5 rounded bg-muted text-muted-foreground text-sm">resources/views/components/ui/</code>.
                </p>
            </div>

            @php
            $variantCode = <<<'CODE'
```php
// In button.blade.php - add a 'success' variant
$variantClasses = match($variant) {
    'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
    'success' => 'bg-emerald-600 text-white hover:bg-emerald-700', // New!
    'warning' => 'bg-amber-500 text-white hover:bg-amber-600', // New!
    default => 'bg-primary text-primary-foreground',
};
```
CODE;
            @endphp
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground flex items-center gap-2">
                    <span class="size-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">3</span>
                    Add Custom Variants
                </h3>
                <p class="text-sm text-muted-foreground">Extend components with new variants by modifying the match expressions:</p>
                <x-markdown-content :content="$variantCode" />
            </div>

            @php
            $wrapperCode = <<<'CODE'
```blade
{{-- resources/views/components/project-button.blade.php --}}
<x-ui.button
    {{ $attributes->merge(['class' => 'uppercase tracking-wide']) }}
    :variant="$variant ?? 'primary'"
>
    {{ $slot }}
</x-ui.button>
```
CODE;
            @endphp
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-foreground flex items-center gap-2">
                    <span class="size-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">4</span>
                    Create Component Wrappers
                </h3>
                <p class="text-sm text-muted-foreground">Build project-specific components that wrap PHP UI components:</p>
                <x-markdown-content :content="$wrapperCode" />
            </div>
        </div>
    </section>

    {{-- Best Practices Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Best Practices</h2>

        <div class="grid sm:grid-cols-2 gap-4">
            <div class="p-4 rounded-xl border border-border bg-card space-y-2">
                <div class="flex items-center gap-2 text-primary">
                    <x-lucide-check class="size-5" />
                    <span class="font-semibold text-card-foreground">Do</span>
                </div>
                <ul class="text-sm text-muted-foreground space-y-1.5 list-disc list-inside">
                    <li>Use semantic colors (<code class="text-xs">bg-primary</code>)</li>
                    <li>Test in both light and dark modes</li>
                    <li>Keep contrast ratios accessible</li>
                    <li>Use CSS variables for consistency</li>
                </ul>
            </div>
            <div class="p-4 rounded-xl border border-border bg-card space-y-2">
                <div class="flex items-center gap-2 text-destructive">
                    <x-lucide-x class="size-5" />
                    <span class="font-semibold text-card-foreground">Don't</span>
                </div>
                <ul class="text-sm text-muted-foreground space-y-1.5 list-disc list-inside">
                    <li>Hardcode colors (<code class="text-xs">bg-blue-500</code>)</li>
                    <li>Mix color systems (HSL + OKLCH)</li>
                    <li>Forget dark mode overrides</li>
                    <li>Ignore accessibility guidelines</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Resources Section --}}
    <section class="space-y-6">
        <h2 class="text-2xl font-bold tracking-tight">Resources</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <a href="https://tailwindcss.com/docs?utm_source=php-ui-docs" target="_blank" class="group p-4 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-2 mb-2">
                    <x-lucide-book-open class="size-5 text-primary" />
                    <span class="font-semibold text-card-foreground group-hover:text-primary transition-colors">Tailwind Docs</span>
                </div>
                <p class="text-sm text-muted-foreground">Official Tailwind CSS documentation</p>
            </a>
            <a href="https://tweakcn.com?utm_source=php-ui-docs" target="_blank" class="group p-4 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-2 mb-2">
                    <x-lucide-palette class="size-5 text-primary" />
                    <span class="font-semibold text-card-foreground group-hover:text-primary transition-colors">TweakCN</span>
                </div>
                <p class="text-sm text-muted-foreground">Visual OKLCH color generator</p>
            </a>
            <a href="https://uicolors.app?utm_source=php-ui-docs" target="_blank" class="group p-4 rounded-xl border border-border bg-card hover:border-primary/50 transition-colors">
                <div class="flex items-center gap-2 mb-2">
                    <x-lucide-pipette class="size-5 text-primary" />
                    <span class="font-semibold text-card-foreground group-hover:text-primary transition-colors">UI Colors</span>
                </div>
                <p class="text-sm text-muted-foreground">Tailwind color palette generator</p>
            </a>
        </div>
    </section>
</div>
