<title>ASIA STORE</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-xs-12 text-center">
            <h2 class="mb-4">¡Bienvenido!</h2>
            <div class="form-group">
                <label for="usuario" class="h5">Nombre de usuario</label>
                <input placeholder="Ingresa tu usuario" type="text" id="usuario" class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="palabra_secreta" class="h5">Contraseña</label>
                <input placeholder="Ingresa tu contraseña" type="password" id="palabra_secreta" class="form-control form-control-sm">
            </div>
            <button id="iniciar_sesion" class="btn btn-primary btn-block mt-4">Iniciar sesión <i class="fa fa-sign-in"></i></button>
           
            
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $("#usuario").focus();
        escuchar_elementos();
    });

    function escuchar_elementos() {
        $("#usuario").keyup(function (evento) {
            if (evento.keyCode === 13) $("#palabra_secreta").focus();
        });

        $("#palabra_secreta").keyup(function (evento) {
            if (evento.keyCode === 13) $("#iniciar_sesion").click();
        });

        $("#iniciar_sesion").click(function () {
            var usuario = $("#usuario").val(),
                palabra_secreta = $("#palabra_secreta").val();
            if (usuario.length <= 0 || palabra_secreta.length <= 0) {
                $("#usuario").focus();
                return;
            }
            var html_original = $("#iniciar_sesion").html();
            $("#iniciar_sesion")
                .html('Comprobando... <i class="fa fa-spin fa-refresh"></i>')
                .removeClass('btn-success btn-warning btn-danger')
                .addClass('btn-warning');
            $.post('./modulos/usuarios/comprobar_datos.php', {datos_usuario: [usuario, palabra_secreta]}, function (respuesta) {

                respuesta = JSON.parse(respuesta);
                console.log("La respuesta es:", respuesta);
                if (respuesta === true) {
                    $("#iniciar_sesion")
                        .html('Correcto <i class="fa fa-check-square"></i>')
                        .removeClass('btn-success btn-warning btn-danger')
                        .addClass('btn-success')
                        .animateCss("bounceOut");
                    setTimeout(function () {
                        window.location.reload();
                    }, 200);
                } else {
                    $("#iniciar_sesion")
                        .html('Datos incorrectos <i class="fa fa-exclamation"></i>')
                        .removeClass('btn-success btn-warning btn-danger')
                        .addClass('btn-danger')
                        .animateCss("shake");
                    $("#usuario").focus();
                }
            });
        });
    }
</script>