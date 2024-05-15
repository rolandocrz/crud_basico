<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"] and !empty($_POST["email"]))) {
        echo "TODO OK";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $email = $_POST["email"];

        $sql = $connection->query("insert into usuario (nombre,apellido,dni,fecha_nac,email) values ('$nombre','$apellido','$dni','$fecha','$email')");

        if ($sql == 1) {
            echo '<div class="alert alert-success" >Resgistro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger" >Error al registrar</div>';
        }
    } else {
        echo '<div class="alert alert-warning" >Algunos de los campos esta vacio</div>';
    }
}