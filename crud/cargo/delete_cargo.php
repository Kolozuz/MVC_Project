<?php
    $no = $_GET['no'];

    include '../connection.php';

    $conecction = new Connection();
    $conecction->db_connect();

    $sql = "DELETE FROM tbl_cargo WHERE no_cargo = $no";
    $delete = $conecction->stm->prepare($sql);

    $delete->execute();

    header("Location: listado_cargo.php");
?>