<x-parts.meta :title="$title" />
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <x-parts.header/>
    <x-parts.asidebar/>
    <main class="app-main">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}
    </main>
    <x-parts.footer/>
</div>
</body>
