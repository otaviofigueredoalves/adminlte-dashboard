<x-layouts.app>
    <x-slot:title>
        {{ $config['title'] }}
    </x-slot:title>
    <x-parts.header-content :hTitle="$config['hTitle']"/>

    <div class="container-fluid">
        <form action="{{ route('users.index') }}" method="get">
            <div class="input-group mb-3" style="width: 450px">
                <input type="text" class="form-control" placeholder="Pesquisar usuário" id="keyword" name="keyword" value="{{ request()?->keyword }}">
                <button type="submit" class="input-group-text btn btn-primary" id="keyword">Pesquisar</button>
            </div>
        </form>
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
                            <form action="{{ route('users.edit',$user) }}" method="get" class="d-inline-block">
                                @csrf
                                <button type="submit" href="" class="btn btn-primary">Editar</button>
                            </form>
                            @can('Admin',$user)
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</x-layouts.app>
