<x-parts.meta/>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <x-parts.header/>
    <x-parts.asidebar/>
    <main class="app-main">
        {{ $slot }}
    </main>
    <x-parts.footer/>
</div>
</body>
