<x-layouts.app>
    <x-slot:title>
        {{ $config['title'] }}
    </x-slot:title>
    <x-parts.header-content :hTitle="$config['hTitle']"/>

    <div class="container-fluid">
        <x-users.cards.basic-details :user="$user" :config="$config"/>
        <x-users.cards.profile :user="$user" :config="$config" />
        <x-users.cards.interests :user="$user" :config="$config"/>
        @can('admin',$user)
            <x-users.cards.roles :user="$user" :config="$config"/>
        @endcan
    </div>
</x-layouts.app>
