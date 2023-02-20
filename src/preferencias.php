<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="Tarea Unidad 4">
    <meta name="description" content="Tarea UD 4. Desarrollo de aplicaciones web con PHP.">
    <meta name="keyword" content="html,css,javascript,php,sesiones,bootstrap,awesome">
    <meta name="author" content="Donato Ramos Martínez">
    <title>Tarea Unidad 4</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>

<body class="container bg-fondo-claro">
    <main>
        <section class="row justify-content-center">
            <form class="col-4 card mt-5 bg-fondo-formulario-preferencias" name="formularioPreferencias" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self">
                <div class="row border-bottom bg-gris_perla pt-3 mb-2 pb-2">
                    <div class="col">
                        <h4>
                            <caption>Preferencias Usuario</caption>
                        </h4>
                    </div>
                </div>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <label for="idIdioma">Idioma</label>
                    </div>
                </div>
                <div class="row justify-content-start mb-4 ms-0 mt-1">
                    <div class="col-2 text-center border bg-gris_perla px-0">
                        <i class="fa-solid fa-language fa-md pt-2"></i>
                    </div>
                    <select class="col form-select me-3" name="idioma" id="idIdioma">
                        <option value='es' selected>Español</option>
                        <option value='en'>Inglés</option>
                    </select>
                </div>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <label for="idPerfil">Perfil Público</label>
                    </div>
                </div>
                <div class="row justify-content-start mb-4 ms-0 mt-1">
                    <div class="col-2 text-center border bg-gris_perla px-0">
                        <i class="fa-solid fa-users fa-md pt-2"></i>
                    </div>
                    <select class="col form-select me-3" name="perfil" id="idPerfil">
                        <option value='yes' selected>Sí</option>
                        <option value='no'>No</option>
                    </select>
                </div>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <label for="idZonaHoraria">Zona Horaria</label>
                    </div>
                </div>
                <div class="row justify-content-start mb-4 ms-0 mt-1">
                    <div class="col-2 text-center border bg-gris_perla px-0">
                        <i class="fa-regular fa-clock fa-md pt-2"></i>
                    </div>
                    <select class="col form-select me-3" name="zonaHoraria" id="idZonaHoraria">
                        <option value='-2' selected>GMT-2</option>
                        <option value='-1'>GMT-1</option>
                        <option value='0'>GMT</option>
                        <option value='1'>GMT+1</option>
                        <option value='2'>GMT+2</option>
                    </select>
                </div>
                </div>
                <div class="row pb-4">
                    <div class="col">
                        <a href="#" class="btn btn-azul_oscuro">Mostrar Preferencias</a>
                    </div>
                    <div class="col">
                        <button type="submit" name="establecer" value='ok' class="btn btn-verde_lima text-white">Establecer Preferencias</button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>