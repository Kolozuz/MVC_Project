<?php include('cargo_header.php');?>

<?php
    $no = $_GET['no'];
    include '../connection.php';
    $connection = new Connection();
    $connection->db_connect();
    $sql = "SELECT * FROM tbl_cargo WHERE no_cargo=$no";
    $read = $connection->stm->prepare($sql);
    $read->execute();
    $cargos = $read->fetchAll(PDO::FETCH_OBJ);

    foreach ($cargos as $a){}

?>

<section class="container shadow">
        <form action="update_cargo.php" method="post" class="p-4">
            <div class="row mb-4 ">
                <div class="col-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/2090px-Sena_Colombia_logo.svg.png" alt="senalogo" width="100px">
                </div>
                <div class="col-10 text-center pt-4" >
                    <h2>Actualizacion de Cargos</h2>
                </div>
            </div>
                <input type="hidden" name="no_cargo" value="<?php echo $a->no_cargo;?>">
            <div class="row mb-4 mt-4">
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="nombre_cargo" placeholder="Ingrese el nombre del cargo a crear " class="form-control" value="<?php echo $a->nombre_cargo;?>">
                </div>
            </div>
            <div class="text-center">
                    <input type="submit" name="submit" value="Enviar" class="btn btn-success">
                </div>
            </form>
    </section>

<?php include('cargo_footer.php'); ?>