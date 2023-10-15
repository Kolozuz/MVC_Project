<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    

    include 'connection.php';

    $connection = new Connection();
    $connection->db_connect();
    $sql = "UPDATE person SET nombres_person='$name', apellidos_person='$lastname', telefono_person='$tel', direccion_person='$adress',fechanac_person = '$birthdate', email_person='$email' WHERE id_person=$id";

    $insert = $connection->stm->prepare($sql);
    $insert->execute();

    header("location: listado.php")

?>