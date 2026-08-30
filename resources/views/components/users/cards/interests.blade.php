<div class="card col-md-6 mt-4">
    <form action="{{ route('users.updateInterests',$user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Interesses
        </div>
        <div class="card-body">
            @foreach($config['interests'] as $interest)
                <div class="form-check">
                    <input
                        class="form-check-input @error('interests') is-invalid @enderror"
                        type="checkbox"
                        value="{{ $interest['value'] }}"
                        id="interest"
                        name="interests[][name]"
                        @checked(in_array($interest['value'], $user->interests->pluck('name')->toArray()))
                    >
                    <label class="interest">
                        {{ $interest['label'] }}
                    </label>
                    @error('interests')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            @endforeach
        </div>
        <div class="card-footer text-body-secondary">
            <button class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>
