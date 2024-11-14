<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros</title>
</head>

<body>

    <form class="" action="parametros.php" method="post">
        <input type="text" name="nombre" value="">
        <button type="submit" name="button">Enviar</button>
    </form>

    <?php
    if (isset($_POST['nombre'])) {
        echo "Se recibe el nombre " . $_REQUEST['nombre'];
    }

    if (isset($_GET['id'])) {
        echo "Se recibe el id: " . $_GET['id'];
    }
    ?>

</body>

</html>