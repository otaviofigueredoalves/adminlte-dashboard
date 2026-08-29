<div class="card col-md-6">
    <form action="{{ route('users.updateProfile',$user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Perfil
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Tipo de pessoa</label>
                <select class="form-select" name="type">
                    @foreach($config['types'] as $type => $value)
                        <option @selected(old('type') === $type || $user?->profile?->type === $type) value="{{ $type }}">{{ $value }}</option>
                    @endforeach
                </select>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $user->profile->address }}">
                @error('address')
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
