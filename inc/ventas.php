<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título</title>
    <!-- Estilos para la barra de navegación -->
    <link rel="stylesheet" href="./css/barra-navegacion.css">
    <!-- Estilos para el contenido principal -->
    <link rel="stylesheet" href="./css/contenido-principal.css">
    <!-- Otros estilos -->
    <link rel="stylesheet" href="./css/abc.css">
    <link rel="stylesheet" href="./css/eac.css">
</head>
<body>
    <!-- Barra de Navegación a la Izquierda -->
    <div class="barra-navegacion-izquierda">
        <!-- Contenido de la barra de navegación aquí -->
    </div>

    <!-- Contenido Principal -->
    <div class="contenido-principal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="btn-group btn-group-justified">
                        <!-- Botones aquí -->
                    </div>
                    <div class="form-group">
                        <!-- Formulario aquí -->
                    </div>
                    <h1 hidden="hidden"><strong>Total: </strong><span id="contenedor_total"></span></h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 table-responsive" id="contenedor_tabla">
                    <!-- Tabla aquí -->
                </div>
            </div>
        </div>

        <!-- Modal de Procesar Venta -->
        <div id="modal_procesar_venta" class="modal fade" role="dialog">
            <!-- Contenido del modal aquí -->
        </div>
    </div>

    <!-- Scripts al final del contenido -->
    <script src="./js/ventas.js"></script>
    <script src="./lib/eac.js"></script>
</div>
</body>
</html>
