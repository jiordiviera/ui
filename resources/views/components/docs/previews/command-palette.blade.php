<div class="w-full max-w-3xl space-y-6">
    {{-- Static Preview (Command Palette is a modal) --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Command Palette Preview</p>
        <p class="text-xs text-zinc-400 dark:text-zinc-500">
            This component requires Livewire. Press <kbd
                class="px-1.5 py-0.5 rounded bg-zinc-200 dark:bg-zinc-700 text-xs">⌘K</kbd> or <kbd
                class="px-1.5 py-0.5 rounded bg-zinc-200 dark:bg-zinc-700 text-xs">Ctrl+K</kbd> to open.
        </p>

        {{-- Static UI Demo --}}
        <div
            class="rounded-xl bg-white shadow-2xl ring-1 ring-black/5 dark:bg-zinc-900 dark:ring-white/10 overflow-hidden">
            {{-- Search Input --}}
            <div class="relative">
                <x-lucide-search class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-zinc-400" />
                <input type="text"
                    class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-zinc-900 placeholder:text-zinc-400 focus:ring-0 dark:text-white sm:text-sm"
                    placeholder="Search commands, files..." disabled />
                <kbd
                    class="absolute right-4 top-3 rounded bg-zinc-100 px-2 py-1 text-xs text-zinc-500 dark:bg-zinc-800 dark:text-zinc-400">
                    ESC
                </kbd>
            </div>

            {{-- Example Results --}}
            <div class="max-h-80 border-t border-zinc-100 dark:border-zinc-800">
                <div class="p-2">
                    <p class="px-3 py-1.5 text-xs font-semibold text-zinc-500 dark:text-zinc-400">Quick Actions</p>
                    <div class="space-y-1">
                        <div class="flex items-center gap-3 rounded-lg px-3 py-2 bg-zinc-100 dark:bg-zinc-800">
                            <x-lucide-file-plus class="size-4 text-zinc-500" />
                            <span class="text-sm text-zinc-900 dark:text-white">Create new file</span>
                            <kbd
                                class="ml-auto rounded bg-zinc-200 px-1.5 py-0.5 text-xs text-zinc-500 dark:bg-zinc-700 dark:text-zinc-400">⌘N</kbd>
                        </div>
                        <div
                            class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800">
                            <x-lucide-folder-open class="size-4 text-zinc-500" />
                            <span class="text-sm text-zinc-900 dark:text-white">Open folder</span>
                            <kbd
                                class="ml-auto rounded bg-zinc-200 px-1.5 py-0.5 text-xs text-zinc-500 dark:bg-zinc-700 dark:text-zinc-400">⌘O</kbd>
                        </div>
                        <div
                            class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800">
                            <x-lucide-settings class="size-4 text-zinc-500" />
                            <span class="text-sm text-zinc-900 dark:text-white">Settings</span>
                            <kbd
                                class="ml-auto rounded bg-zinc-200 px-1.5 py-0.5 text-xs text-zinc-500 dark:bg-zinc-700 dark:text-zinc-400">⌘,</kbd>
                        </div>
                    </div>
                </div>
                <div class="p-2 border-t border-zinc-100 dark:border-zinc-800">
                    <p class="px-3 py-1.5 text-xs font-semibold text-zinc-500 dark:text-zinc-400">Recent Files</p>
                    <div class="space-y-1">
                        <div
                            class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800">
                            <x-lucide-file class="size-4 text-zinc-500" />
                            <span class="text-sm text-zinc-900 dark:text-white">dashboard.blade.php</span>
                        </div>
                        <div
                            class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800">
                            <x-lucide-file class="size-4 text-zinc-500" />
                            <span class="text-sm text-zinc-900 dark:text-white">User.php</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div
                class="flex flex-wrap items-center gap-x-4 gap-y-2 border-t border-zinc-100 bg-zinc-50 px-4 py-2.5 text-xs text-zinc-500 dark:border-zinc-800 dark:bg-zinc-800/50 dark:text-zinc-400">
                <span class="flex items-center gap-1">
                    <kbd class="rounded bg-zinc-200 px-1.5 py-0.5 font-mono dark:bg-zinc-700">↑↓</kbd>
                    Navigate
                </span>
                <span class="flex items-center gap-1">
                    <kbd class="rounded bg-zinc-200 px-1.5 py-0.5 font-mono dark:bg-zinc-700">↵</kbd>
                    Select
                </span>
                <span class="flex items-center gap-1">
                    <kbd class="rounded bg-zinc-200 px-1.5 py-0.5 font-mono dark:bg-zinc-700">esc</kbd>
                    Close
                </span>
            </div>
        </div>
    </div>
</div>