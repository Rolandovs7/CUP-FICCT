<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CUP FICCT') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <i class="fas fa-graduation-cap fa-5x text-primary mb-4"></i>
        <h1 class="mb-3">CUP FICCT</h1>
        <p class="text-muted mb-4">Sistema de Admisión Universitaria</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
