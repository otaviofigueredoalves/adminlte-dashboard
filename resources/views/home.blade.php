<x-layouts.app>
    <x-slot:title>
        {{ $config['title'] }}
    </x-slot:title>
    <x-parts.header-content :hTitle="$config['hTitle']"/>
    <div class="app-content">
        <div class="container-fluid">
            <h1>Olá, {{ auth()->user()->name }}</h1>
        </div>
    </div>
</x-layouts.app>
