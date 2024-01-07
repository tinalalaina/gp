<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Autres fichiers CSS de votre application -->
</head>
<body>
    @yield('content')
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Autres fichiers JS de votre application -->
</body>
</html>