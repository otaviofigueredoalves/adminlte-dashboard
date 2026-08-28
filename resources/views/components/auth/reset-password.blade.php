<x-layouts.auth class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('home') }}"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Esqueceu a senha? Troque aqui</p>
                <form action="{{ route('password.update') }}" method="post" class="mb-3">
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New password" name="password" value="{{ old('password') }}"/>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Repeat password" name="password_confirmation"/>
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <!-- /.col -->
                        <div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Resetar senha</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>

                <p class="mb-0 mt-6">
                    <a href="{{ route('login') }}" class="text-center">Entrar na conta</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

</x-layouts.auth>
