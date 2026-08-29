<x-layouts.auth class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('home') }}"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Esqueceu a senha? Troque aqui</p>

                <form action="{{ route('password.email') }}" method="post" class="mb-3">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" />
                        @error('email')
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
                                <button type="submit" class="btn btn-primary">Solicitar a troca de senha</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>

                <p class="mb-0 mt-6">
                    <a href="{{ route('login') }}" class="text-center">Lembrou? Tente entrar na conta</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

</x-layouts.auth>
