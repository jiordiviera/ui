<div class="w-full space-y-6">
    {{-- Full Featured Data Table --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Full Featured (Search, Sort, Filter, Pagination)
        </p>
        <x-ui.data-table :columns="[
        ['key' => 'id', 'label' => 'ID', 'sortable' => true],
        ['key' => 'name', 'label' => 'Name', 'sortable' => true],
        ['key' => 'email', 'label' => 'Email', 'sortable' => true],
        ['key' => 'status', 'label' => 'Status', 'sortable' => true, 'filterable' => true],
        ['key' => 'role', 'label' => 'Role', 'sortable' => true, 'filterable' => true],
    ]" :data="[
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'status' => 'Active', 'role' => 'Admin'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'status' => 'Active', 'role' => 'User'],
        ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'status' => 'Inactive', 'role' => 'User'],
        ['id' => 4, 'name' => 'Alice Brown', 'email' => 'alice@example.com', 'status' => 'Active', 'role' => 'Editor'],
        ['id' => 5, 'name' => 'Charlie Wilson', 'email' => 'charlie@example.com', 'status' => 'Pending', 'role' => 'User'],
        ['id' => 6, 'name' => 'Diana Miller', 'email' => 'diana@example.com', 'status' => 'Active', 'role' => 'Admin'],
        ['id' => 7, 'name' => 'Edward Davis', 'email' => 'edward@example.com', 'status' => 'Inactive', 'role' => 'User'],
        ['id' => 8, 'name' => 'Fiona Garcia', 'email' => 'fiona@example.com', 'status' => 'Active', 'role' => 'Editor'],
        ['id' => 9, 'name' => 'George Martinez', 'email' => 'george@example.com', 'status' => 'Active', 'role' => 'User'],
        ['id' => 10, 'name' => 'Hannah Robinson', 'email' => 'hannah@example.com', 'status' => 'Pending', 'role' => 'User'],
        ['id' => 11, 'name' => 'Ivan Clark', 'email' => 'ivan@example.com', 'status' => 'Active', 'role' => 'Admin'],
        ['id' => 12, 'name' => 'Julia Lewis', 'email' => 'julia@example.com', 'status' => 'Inactive', 'role' => 'User'],
    ]" :perPage="5" />
    </div>

    {{-- Simple Table (No Search/Filter) --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Simple (No Search, No Filter)</p>
        <x-ui.data-table :searchable="false" :filterable="false" :paginated="false" :columns="[
        ['key' => 'product', 'label' => 'Product'],
        ['key' => 'price', 'label' => 'Price'],
        ['key' => 'stock', 'label' => 'Stock'],
    ]"
            :data="[
        ['product' => 'Laptop Pro', 'price' => '$1,299', 'stock' => 45],
        ['product' => 'Wireless Mouse', 'price' => '$49', 'stock' => 120],
        ['product' => 'USB-C Hub', 'price' => '$79', 'stock' => 85],
        ['product' => 'Mechanical Keyboard', 'price' => '$149', 'stock' => 32],
    ]" />
    </div>

    {{-- Loading State --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Loading State</p>
        <x-ui.data-table :loading="true" :searchable="false" :filterable="false" :paginated="false" :columns="[
        ['key' => 'col1', 'label' => 'Column 1'],
        ['key' => 'col2', 'label' => 'Column 2'],
        ['key' => 'col3', 'label' => 'Column 3'],
    ]" :data="[]" />
    </div>

    {{-- Empty State --}}
    <div class="space-y-3">
        <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Empty State</p>
        <x-ui.data-table :searchable="false" :filterable="false" :paginated="false" emptyMessage="No users found"
            :columns="[
        ['key' => 'name', 'label' => 'Name'],
        ['key' => 'email', 'label' => 'Email'],
    ]" :data="[]" />
    </div>
</div>