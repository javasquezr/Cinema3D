<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cinema3D')</title>

    <!-- Bootstrap 5 por CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
        <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('registros.index')}}">
                Cinema3D
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('registros.index')}}">
                    Registros
                </a>
                <a class="nav-link" href="{{ route('registros.create')}}">
                    Nuevo Registro
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @if  (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{session('success')}}
                <button 
                    type="button" 
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Cerrar"
                    ></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Revisa los siguientes errores:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $menajeError)
                        <li>{{ $MensajeError }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

<!-- JavaScript de Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>
</body>
</html>