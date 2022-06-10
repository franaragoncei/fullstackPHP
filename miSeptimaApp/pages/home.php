<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include '../db/connection.php';
    include 'editar.php';
    echo '<h1>Bienvenido, ' . $_SESSION['nombre'] . ' ' . $_SESSION['apellido'] . '</h1>';
    echo '<button><a href="cerrar_sesion.php">Cerrar Sesión</a></button>';
    echo '<button><a href="editarForm.php">Editar</a></button>';
    echo '<button id="verPeliculas">Ver Peliculas</button>';
    echo '<button id="ocultarPeliculas">Ocultar Peliculas</button>';
    echo '<div id="contenedor"></div>';
    ?>
    <script>
        $('#ocultarPeliculas').click(function() {
            $('#contenedor').html('')
        })

        $('#verPeliculas').click(function() {
            $.ajax({
                method: 'GET',
                dataType: 'json',
                url: 'misPeliculas.php',
                data: {},
                success: function(data) {
                    console.log(data)
                    $('#contenedor').html('')
                    data.forEach(element => {
                        $('#contenedor').append(
                            '<p>' +
                            element.id +
                            ' -> ' +
                            element.nombre +
                            '</p>'
                        )
                    })
                },
                error: function(response) {
                    console.log(response);
                }
            })
        })
    </script>
</body>

</html>