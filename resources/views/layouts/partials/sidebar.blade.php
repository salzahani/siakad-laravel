@php $role = session('user_role'); @endphp
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="/dashboard" class="brand-link">
            <span class="brand-text fw-light">Siakad</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                    </li>
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link {{ request()->is('mahasiswa*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                @if (in_array($role, [1, 2]))
                <li class="nav-item">
                    <a href="/nilai" class="nav-link {{ request()->is('nilai*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-journal-check"></i>
                        <p>Nilai</p>
                    </a>
                </li>
                @endif
                @if ($role == 1)
                <li class="nav-item">
                    <a href="/admin" class="nav-link {{ request()->is('admin*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>Administrasi</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ url('/profil') }}" class="nav-link {{ request()->is('profil') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
