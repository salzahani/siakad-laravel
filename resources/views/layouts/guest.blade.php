<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login') - SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body class="bg-body-secondary d-flex flex-column justify-content-center align-items-center vh-100">
<div class="card" style="width: 24rem;">
        <div class="card-body">
            <h4 class="text-center mb-3">Siakad</h4>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
