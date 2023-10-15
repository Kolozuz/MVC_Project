<?php
    $id = $_GET['id'];

    include 'connection.php';

    $conecction = new Connection();
    $conecction->db_connect();

    $sql = "DELETE FROM person WHERE id_person = $id";
    $delete = $conecction->stm->prepare($sql);

    $delete->execute();

    header("Location: listado.php");
?>