<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Siakad') | Siakad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.10.0/dist/css/adminlte.min.css">
    @stack('styles')
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0">@yield('title')</h3>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    @includeWhen(session('user_role') ==1, 'layouts.partials.info-admin')
                    @includeIf('layouts.partials.info-opsional')
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @yield('content')
                    @section('catatan')
                    <p class="text-muted">Catatan umum Siakad.</p>
                    @show
                </div>
            </div>
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.10.0/dist/js/adminlte.min.js"></script>
    @stack('scripts')
</body>
</html>
