<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Venta</title>
    <link rel="stylesheet" href="./css/abc.css">
    <link rel="stylesheet" href="./css/eac.css">
    <!-- Agrega aquí tus enlaces a las hojas de estilo y scripts necesarios -->
    <style>
        body {
            display: flex;
            flex-direction: row;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 240px;
            padding: 20px;
            background-color: #DD0000;
            color: white;
        }
        .sidebar a {
            color: black; /* Color original de los enlaces */
        }
        .sidebar a:hover {
            background-color: #FFD700; /* Mantener el cambio de color al pasar el ratón por encima */
        }
        .sidebar a.cerrar-sesion:hover {
            background-color: #FFD700; /* Cambia el color al pasar el ratón por encima */
            color: black; /* Cambia el color del texto al pasar el ratón por encima */
        }
        .sidebar a.nombre-usuario:hover {
            background-color: transparent; /* Evitar el cambio de color al pasar el ratón por encima */
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
    </style>
    
    <style>
        @media print {
            .sidebar {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Nombre de la empresa -->
                <div class="company-name" style="font-size: 3.4rem; text-shadow: 2px 2px 2px black;">
                    ASIA STORE
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="./usuarios">
                            <i class="fa fa-user"></i> Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cerrar-sesion" href="./modulos/usuarios/cerrar_sesion.php">
                            <span style="color: white; font-size: 2.2rem; text-shadow: 2px 2px 0px black; padding: 5px;">CERRAR SESIÓN<br></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nombre-usuario" href="./modulos/usuarios/cerrar_sesion.php">
                            
                            <?php echo (intval($_SESSION["administrador"]) === 1) ? '' : ''; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-10 content">
            <!-- Contenido principal aquí -->
        </main>
    </div>
</div>

<script>
    // Agrega aquí tus scripts personalizados
</script>

<div id="modal_acerca_de" class="modal fade" role="dialog">
    <!-- Contenido del modal acerca de aquí -->
</div>

</body>
</html>
