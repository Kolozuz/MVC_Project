<?php

    $nombrecargo = $_POST['nombre_cargo'];

    include '../connection.php';

    $connection = new Connection();
    $connection->db_connect();
    $sql = "INSERT INTO tbl_cargo(nombre_cargo) VALUES ('$nombrecargo')";

    $insert = $connection->stm->prepare($sql);
    $insert->execute();

    header("location: listado_cargo.php")

?>