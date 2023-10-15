<?php
    $no = $_POST['no_cargo'];
    $nombrecargo = $_POST['nombre_cargo'];

    include '../connection.php';

    $connection = new Connection();
    $connection->db_connect();
    $sql = "UPDATE tbl_cargo SET nombre_cargo='$nombrecargo' WHERE no_cargo=$no";

    $insert = $connection->stm->prepare($sql);
    $insert->execute();

    header("location: listado_cargo.php");

?>