
<div class="card col-md-6 mt-4">
    <form action="{{ route('users.updateRole',$user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-header">
            Interesses
        </div>
        <div class="card-body">
            @foreach($config['roles'] as $role)
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{ $role->id }}"
                        id="role"
                        name="role"
                        @checked(in_array($role->name, $user->roles->pluck('name')->toArray()))
                    >
                    <label class="interest">
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="card-footer text-body-secondary">
            <button class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>
