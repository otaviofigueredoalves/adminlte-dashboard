<div class="card col-md-6 mt-4">
    <form action="{{ route('users.update',$user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Informações Básicas
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="fulano" value="{{ $user->name }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="fulano@example.com" value="{{ $user->email }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="nova senha">
                @error('password')
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
