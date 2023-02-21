<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="Tarea Unidad 4">
    <meta name="description" content="Tarea UD 4. Desarrollo de aplicaciones web con PHP.">
    <meta name="keyword" content="html,css,javascript,php,sesiones,bootstrap,awesome">
    <meta name="author" content="Donato Ramos Martínez">
    <title>Tema 4</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<?php
if (isset($_POST['borrar'])) {
    if (!isset($_SESSION['idioma']) || !isset($_SESSION['perfil']) || !isset($_SESSION['zonaHoraria'])) {
        $_SESSION['mensaje'] = 'Debes fijar primero las preferencias.';
    } else {
        unset($_SESSION['idioma']);
        unset($_SESSION['perfil']);
        unset($_SESSION['zonaHoraria']);
        $_SESSION['mensaje'] = 'Preferencias Borradas';
    }
    $archivoActual = $_SERVER['PHP_SELF'];
    header("Location: $archivoActual");
    exit();
}
?>

<body class="container bg-fondo-claro">
    <main>
        <section class="row justify-content-center">
            <form class="col-4 card mt-5 bg-verde_lima text-white" name="formularioMostrar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self">
                <div class="row bg-verde_lima pt-3 pb-2">
                    <div class="col">
                        <h4>
                            <i class="fa-solid fa-user-gear fa-md pt-2"></i>
                            <caption>Preferencias</caption>
                        </h4>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['mensaje'])) {
                    echo '<div class="row mt-1 mb-1">';
                    echo '<div class="col">';
                    echo "<span class='text-danger mt-1 mb-1'>" . $_SESSION['mensaje'] . "</span>";
                    echo '</div>';
                    echo '</div>';
                    unset($_SESSION['mensaje']);
                }
                ?>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <span>Idioma:</span>
                        <?php
                        if (isset($_SESSION['idioma'])) {
                            if ($_SESSION['idioma'] == 'es') {
                                echo "<span>Español</span>";
                            } else {
                                echo "<span>Inglés</span>";
                            }
                        } else {
                            echo "<span>No establecido</span>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <span>Perfil Público:</span>
                        <?php
                        if (isset($_SESSION['perfil'])) {
                            if ($_SESSION['perfil'] == 'no') {
                                echo "<span>No</span>";
                            } else {
                                echo "<span>Sí</span>";
                            }
                        } else {
                            echo "<span>No establecido</span>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row mt-1 mb-1">
                    <div class="col">
                        <span>Zona horaria:</span>
                        <?php
                        if (isset($_SESSION['zonaHoraria'])) {
                            switch ($_SESSION['zonaHoraria']) {
                                case '-2':
                                    echo "<span>GMT-2</span>";
                                    break;

                                case '-1':
                                    echo "<span>GMT-1</span>";
                                    break;

                                case '0':
                                    echo "<span>GMT</span>";
                                    break;

                                case '1':
                                    echo "<span>GMT+1</span>";
                                    break;
                                case '2':
                                    echo "<span>GMT+2</span>";
                                    break;
                            }
                        } else {
                            echo "<span>No establecido</span>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row pb-4 mt-3 justify-content-start">
                    <div class="col-3">
                        <a href="preferencias.php" class="btn btn-azul_oscuro">Establecer</a>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="borrar" value='ok' class="btn btn-danger text-white">Borrar</button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>