<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"] and !empty($_POST["email"]))) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $email = $_POST["email"];
        $sql = $connection->query("update usuario set nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha', email='$email' where id = $id ");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div alert alert-danger>ERROR AL MODIFICAR</div";
        }
    } else {
        echo "<div alert alert-warning>CAMPOS VACIOS</div";
    }
}