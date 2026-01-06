<div class="w-full max-w-3xl space-y-10">
    {{-- Basic File Upload --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Basic</p>
        <x-ui.file-upload
            label="Upload Document"
            description="PDF, DOC, or TXT files"
            maxSize="5MB"
        />
    </div>

    {{-- Image Upload --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Image Upload (with preview)</p>
        <x-ui.file-upload
            label="Profile Picture"
            accept="image/*"
            description="PNG, JPG or GIF"
            maxSize="2MB"
        />
    </div>

    {{-- Multiple Files --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Multiple Files</p>
        <x-ui.file-upload
            label="Upload Photos"
            accept="image/*"
            :multiple="true"
            description="Select multiple images"
            maxSize="10MB"
        />
    </div>

    {{-- Specific File Types --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Specific File Types (PDF only)</p>
        <x-ui.file-upload
            label="Upload PDF"
            accept=".pdf"
            description="Only PDF files are accepted"
            maxSize="20MB"
        />
    </div>

    {{-- With Error --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">With Error</p>
        <x-ui.file-upload
            label="Upload File"
            error="The file is too large. Maximum size is 5MB."
            description="Any file type"
            maxSize="5MB"
        />
    </div>

    {{-- Without Label --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Without Label</p>
        <x-ui.file-upload
            :label="null"
            description="Drop files here or click to browse"
            maxSize="10MB"
        />
    </div>
</div>
