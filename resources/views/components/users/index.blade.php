<x-layouts.app>
    <x-slot:title>
        Usuários
    </x-slot:title>
    <x-parts.header-content :hTitle="$config['hTitle']"/>

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</x-layouts.app>
