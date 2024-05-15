<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $connection->query("delete from usuario where id= $id");
    if ($sql == 1) {
        echo "<div alert alert-success>SE ELEMINO CON EXITO</div";
        header("location:index.php");
    } else {
        echo "<div alert alert-warning>ERROR AL ELIMINAR</div";
    }
}