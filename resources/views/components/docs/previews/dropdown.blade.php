<div class="w-full max-w-2xl space-y-8">
    {{-- Basic Dropdown --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Basic</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                placeholder="Select a fruit"
                :options="[
                    ['value' => 'apple', 'label' => 'Apple'],
                    ['value' => 'banana', 'label' => 'Banana'],
                    ['value' => 'cherry', 'label' => 'Cherry'],
                    ['value' => 'grape', 'label' => 'Grape'],
                    ['value' => 'orange', 'label' => 'Orange'],
                ]"
            />
        </div>
    </div>

    {{-- With Label --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Label</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Country"
                placeholder="Select your country"
                :options="[
                    ['value' => 'us', 'label' => 'United States'],
                    ['value' => 'ca', 'label' => 'Canada'],
                    ['value' => 'uk', 'label' => 'United Kingdom'],
                    ['value' => 'fr', 'label' => 'France'],
                    ['value' => 'de', 'label' => 'Germany'],
                ]"
            />
        </div>
    </div>

    {{-- Required --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Required</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Category"
                placeholder="Select a category"
                :required="true"
                :options="[
                    ['value' => 'tech', 'label' => 'Technology'],
                    ['value' => 'design', 'label' => 'Design'],
                    ['value' => 'marketing', 'label' => 'Marketing'],
                ]"
            />
        </div>
    </div>

    {{-- Searchable --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Searchable</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Programming Language"
                placeholder="Search and select..."
                :searchable="true"
                :options="[
                    ['value' => 'php', 'label' => 'PHP'],
                    ['value' => 'javascript', 'label' => 'JavaScript'],
                    ['value' => 'python', 'label' => 'Python'],
                    ['value' => 'ruby', 'label' => 'Ruby'],
                    ['value' => 'go', 'label' => 'Go'],
                    ['value' => 'rust', 'label' => 'Rust'],
                    ['value' => 'java', 'label' => 'Java'],
                    ['value' => 'csharp', 'label' => 'C#'],
                    ['value' => 'swift', 'label' => 'Swift'],
                    ['value' => 'kotlin', 'label' => 'Kotlin'],
                ]"
            />
        </div>
    </div>

    {{-- With Preselected Value --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Preselected Value</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Size"
                value="md"
                :options="[
                    ['value' => 'xs', 'label' => 'Extra Small'],
                    ['value' => 'sm', 'label' => 'Small'],
                    ['value' => 'md', 'label' => 'Medium'],
                    ['value' => 'lg', 'label' => 'Large'],
                    ['value' => 'xl', 'label' => 'Extra Large'],
                ]"
            />
        </div>
    </div>

    {{-- With Error --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Error</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Status"
                placeholder="Select status"
                error="Please select a status"
                :options="[
                    ['value' => 'active', 'label' => 'Active'],
                    ['value' => 'inactive', 'label' => 'Inactive'],
                    ['value' => 'pending', 'label' => 'Pending'],
                ]"
            />
        </div>
    </div>

    {{-- Disabled --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Disabled</p>
        <div class="max-w-xs">
            <x-ui.dropdown
                label="Disabled"
                placeholder="Cannot select"
                :disabled="true"
                :options="[
                    ['value' => 'a', 'label' => 'Option A'],
                    ['value' => 'b', 'label' => 'Option B'],
                ]"
            />
        </div>
    </div>
</div>
