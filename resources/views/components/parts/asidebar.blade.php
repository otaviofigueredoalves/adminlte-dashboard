<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ Vite::asset('resources/images/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                @can('edit',auth()->user())
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Usuários</p>
                        </a>
                @endcan
                    </li><li class="nav-item">
                        <a href="{{ route('users.edit',auth()->user()) }}" class="nav-link">
                            <i class="nav-icon bi bi-person"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</aside>
