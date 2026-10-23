<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de información personal</title>

    <!-- Bootstrap 5 por CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <style>
        :root {
            --bs-primary: #173b63;
            --bs-primary-rgb: 23, 59, 99;
            --bs-success: #11766f;
            --bs-success-rgb: 17, 118, 111;
            --bs-body-color: #243447;
            --bs-border-color: #d9e2ec;
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(
                    ellipse at top,
                    rgba(220, 232, 244, 0.65),
                    transparent 55%
                ),
                #f3f6fa;
        }

        .page-title {
            color: #173b63 !important;
            font-weight: 700;
            letter-spacing: -0.035em;
        }

        .page-subtitle {
            color: #607286 !important;
        }

        .finance-card {
            overflow: hidden;
            border: 1px solid #d9e2ec;
            border-radius: 1rem;
            box-shadow: 0 1rem 2.5rem rgba(23, 59, 99, 0.09);
        }

        .finance-card .card-body {
            padding: clamp(1.25rem, 4vw, 2.25rem);
        }

        .form-label {
            color: #173b63;
            font-weight: 600;
        }

        .form-control {
            border-color: #cbd7e3;
            border-radius: 0.55rem;
        }

        .form-control:focus {
            border-color: #3e7898;
            box-shadow: 0 0 0 0.2rem rgba(62, 120, 152, 0.18);
        }

        .form-check-input:checked {
            background-color: #11766f;
            border-color: #11766f;
        }

        .btn-primary {
            --bs-btn-bg: #173b63;
            --bs-btn-border-color: #173b63;
            --bs-btn-hover-bg: #11766f;
            --bs-btn-hover-border-color: #11766f;
            --bs-btn-active-bg: #0d625c;
            --bs-btn-active-border-color: #0d625c;

            border-radius: 0.6rem;
            font-weight: 600;
        }

        .results-card .card-header {
            border-bottom: 0;
        }

        .results-card .card-body p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h1 class="page-title text-center mb-3">
                    Registro de información personal
                </h1>

                <p class="page-subtitle text-center mb-5">
                    Interfaz clara y confiable, inspirada en la identidad
                    visual del sector financiero.
                </p>

                <!-- El formulario se agregará en el paso 3 -->
                <div class="card finance-card">
                    <div class="card-body">

                        <form 
                            id="formularioBootstrap" 
                            action="{{ route('registros.store')}}" 
                            method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nombres"
                                    name="nombres"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="apellidos"
                                    name="apellidos"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">
                                    Fecha de nacimiento
                                </label>
                                <input
                                    type="date"
                                    class="form-control"
                                    id="fechaNacimiento"
                                    name="fechaNacimiento"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="ninos" class="form-label">
                                    Cantidad de niños a cargo
                                </label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="ninos"
                                    name="ninos"
                                    min="0"
                                    value="0"
                                    required>
                            </div>

                            <!-- En el paso 4 agregaremos radios y checkboxes -->
                            <!-- Madre cabeza de familia -->
                            <div class="mb-3">
                                <label class="form-label d-block">
                                    ¿Es madre cabeza de familia?
                                </label>

                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="madreCabeza"
                                        id="madreSi"
                                        value="Sí">

                                    <label class="form-check-label" for="madreSi">Sí</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="madreCabeza"
                                        id="madreNo"
                                        value="No"
                                        checked>

                                    <label class="form-check-label" for="madreNo">No</label>
                                </div>
                            </div>

                            <!-- Estudio técnico o tecnológico -->
                            <div class="mb-3">
                                <label class="form-label d-block">
                                    ¿Está realizando un técnico o tecnólogo?
                                </label>

                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="estudio"
                                        id="estudioSi"
                                        value="Sí">

                                    <label class="form-check-label" for="estudioSi">Sí</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="estudio"
                                        id="estudioNo"
                                        value="No"
                                        checked>

                                    <label class="form-check-label" for="estudioNo">No</label>
                                </div>
                            </div>

                            <!-- Géneros de cine -->
                            <div class="mb-4">
                                <label class="form-label d-block">
                                    Géneros de cine que prefiere:
                                </label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Acción" id="accion">
                                            <label class="form-check-label" for="accion">Acción</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Comedia" id="comedia">
                                            <label class="form-check-label" for="comedia">Comedia</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Drama" id="drama">
                                            <label class="form-check-label" for="drama">Drama</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Terror" id="terror">
                                            <label class="form-check-label" for="terror">Terror</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Ciencia Ficción" id="scifi">
                                            <label class="form-check-label" for="scifi">
                                                Ciencia Ficción
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="generos[]" value="Romance" id="romance">
                                            <label class="form-check-label" for="romance">Romance</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botón para enviar -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Enviar y mostrar respuestas
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Zona de confirmación de registro -->
                <div 
                    id="mensajeGuardado" 
                    class="alert alert-success mt-3"
                    role="alert"
                    style="display:none;"></div>
                <!-- Zona de resultados -->
                <div id="resultados" class="mt-5" style="display: none;">
                    <div class="card border-success finance-card results-card">

                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Respuestas seleccionadas</h5>
                        </div>

                        <div class="card-body" id="contenidoResultados"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript de Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script>
        const formulario = document.getElementById('formularioBootstrap');
        
        formulario.addEventListener(
            'submit',
            async function (e) {
                // Evita que el navegador recargue la página.
                e.preventDefault();

                // Captura los valores de los campos.
                const boton = formulario.querySelector('button[type="submit"]');
                const mensaje = document.getElementById('mensajeGuardado');
                const resultados = document.getElementById('resultados');
                const contenidoResultados = document.getElementById('contenidoResultados');

                // Ocultar mensajes anteriores
                mensaje.style.display = 'none';
                resultados.style.display = 'none';

                // Evitar envios repetidos mientras se procesa la solicitud
                boton.disabled = true;
                const textoOriginal = boton.textContent;
                boton.textContent = 'Guardando...';

                try {
                    // Enviar los datos a Laravel
                    const respuesta = await fetch(formulario.action, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: new FormData(formulario)
                    });

                    const data = await respuesta.json();

                    // Laravel puede responder con errores de validacion (HTTP 422)
                    if (!respuesta.ok){
                        const errores = data.errors
                            ? Object.values(data.errors).flat().join('\n')
                            : data.message;
                        
                        throw new Error(errores || 'No fue posible guardar el registro.');
                    }

                    // Solo llegamos aqui si Laravel confirmo el guardado
                    const registro = data.registro;

                    const generosTexto = registro.generos.length > 0
                        ? registro.generos.join(', ')
                        : 'Ninguno seleccionado';
                    
                    const respuestas = [
                        ['Numero de registro', registro.id],
                        ['Nombres', registro.nombres],
                        ['Apellidos', registro.apellidos],
                        ['Fecha de nacimiento', registro.fechaNacimiento],
                        ['Cantidad de niños a cargo', registro.ninos],
                        ['Madre cabeza de familia', registro.madreCabeza],
                        ['Está realizando técnico/tecnólogo', registro.estudio],
                        ['Generos de cine preferidos', generosTexto]
                    ];

                    // Construir el resultado usando texto
                    contenidoResultados.replaceChildren(
                        ...respuestas.map(function ([etiqueta, valor]){
                            const parrafo = document.createElement('p');
                            const titulo = document.createElement('strong');

                            titulo.textContent = etiqueta + ':';
                            parrafo.append(titulo, ' ' + valor);

                            return parrafo;
                        })
                    );

                    // mostrar confirmacion y resultado
                    mensaje.textContent = data.message
                        +  'ID del registro: '
                        + registro.id;

                    mensaje.style.display = 'block';
                    resultados.style.display = 'block';

                    resultados.scrollIntoView({
                        behavior: 'smooth'
                    });

                    // Permitir un nuevo registro
                    formulario.reset();
                } catch (error) {
                    mensaje.ClassName = 'alert alert-danger mt-3';
                    mensaje.textContent = error.message;
                    mensaje.style.display = 'block';
                } finally {
                    boton.disable = false;
                    boton.textContent = textoOriginal;
                }
            }
        );
    </script>
</body>
</html>