<x-layouts.app>
    <x-slot:title>
        {{ $config['title'] }}
    </x-slot:title>
    <x-parts.header-content :hTitle="$config['hTitle']"/>

    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('users.update',$user) }}" class="card" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                Perfil
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="fulano@example.com" value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="nova senha">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                <button class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</x-layouts.app>
