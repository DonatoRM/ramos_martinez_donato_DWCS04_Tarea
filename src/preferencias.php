<!DOCTYPE html>
<?php
// Abrimos una sesión
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
<?php
if (isset($_POST['establecer'])) {
    $_SESSION['idioma'] = $_POST['idioma'];
    $_SESSION['perfil'] = $_POST['perfil'];
    $_SESSION['zonaHoraria'] = $_POST['zonaHoraria'];
    $archivoActual = $_SERVER['PHP_SELF'];
    $_SESSION['mensaje'] = 'Preferencias de usuario guardadas';
    header("Location: $archivoActual");
    exit();
}
?>

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
                <?php
                if (isset($_SESSION['mensaje'])) {
                    echo '<div class="row mt-1 mb-1">';
                    echo '<div class="col">';
                    echo "<p class='text-azul_oscuro'>" . $_SESSION['mensaje'] . "</p>";
                    echo '</div>';
                    echo '</div>';
                    unset($_SESSION['mensaje']);
                }
                ?>
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
                        <?php
                        if (isset($_SESSION['idioma'])) {
                            if ($_SESSION['idioma'] == 'es') {
                                echo "<option value='es' selected>Español</option>";
                            } else {
                                echo "<option value='es'>Español</option>";
                            }
                            if ($_SESSION['idioma'] == 'en') {
                                echo "<option value='en' selected>Inglés</option>";
                            } else {
                                echo "<option value='en'>Inglés</option>";
                            }
                        } else {
                            echo "<option value='es'>Español</option>";
                            echo "<option value='en'>Inglés</option>";
                        }
                        ?>
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
                        <?php
                        if (isset($_SESSION['perfil'])) {
                            if ($_SESSION['perfil'] == 'yes') {
                                echo "<option value='yes' selected>Sí</option>";
                            } else {
                                echo "<option value='yes'>Sí</option>";
                            }
                            if ($_SESSION['perfil'] == 'en') {
                                echo "<option value='no' selected>No</option>";
                            } else {
                                echo "<option value='no'>No</option>";
                            }
                        } else {
                            echo "<option value='yes'>Sí</option>";
                            echo "<option value='no'>No</option>";
                        }
                        ?>
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
                        <?php
                        if (isset($_SESSION['zonaHoraria'])) {
                            switch ($_SESSION['zonaHoraria']) {
                                case '-2':
                                    echo "<option value='-2' selected>GMT-2</option>";
                                    echo "<option value='-1'>GMT-1</option>";
                                    echo "<option value='0'>GMT</option>";
                                    echo "<option value='1'>GMT+1</option>";
                                    echo "<option value='2'>GMT+2</option>";
                                    break;
                                case '-1':
                                    echo "<option value='-2'>GMT-2</option>";
                                    echo "<option value='-1' selected>GMT-1</option>";
                                    echo "<option value='0'>GMT</option>";
                                    echo "<option value='1'>GMT+1</option>";
                                    echo "<option value='2'>GMT+2</option>";
                                    break;
                                case '0':
                                    echo "<option value='-2'>GMT-2</option>";
                                    echo "<option value='-1'>GMT-1</option>";
                                    echo "<option value='0' selected>GMT</option>";
                                    echo "<option value='1'>GMT+1</option>";
                                    echo "<option value='2'>GMT+2</option>";
                                    break;
                                case '1':
                                    echo "<option value='-2'>GMT-2</option>";
                                    echo "<option value='-1'>GMT-1</option>";
                                    echo "<option value='0'>GMT</option>";
                                    echo "<option value='1' selected>GMT+1</option>";
                                    echo "<option value='2'>GMT+2</option>";
                                    break;
                                case '2':
                                    echo "<option value='-2'>GMT-2</option>";
                                    echo "<option value='-1'>GMT-1</option>";
                                    echo "<option value='0'>GMT</option>";
                                    echo "<option value='1'>GMT+1</option>";
                                    echo "<option value='2' selected>GMT+2</option>";
                                    break;
                            }
                        } else {
                            echo "<option value='-2'>GMT-2</option>";
                            echo "<option value='-1'>GMT-1</option>";
                            echo "<option value='0'>GMT</option>";
                            echo "<option value='1'>GMT+1</option>";
                            echo "<option value='2'>GMT+2</option>";
                        }
                        ?>

                    </select>
                </div>
                </div>
                <div class="row pb-4">
                    <div class="col">
                        <a href="mostrar.php" class="btn btn-azul_oscuro">Mostrar Preferencias</a>
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