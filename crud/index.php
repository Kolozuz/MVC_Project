<?php include('../Inc/header.php');?>
    
<?php
    include 'connection.php';
    $connection = new Connection();
    $connection->db_connect();
    $sql = "SELECT * FROM tbl_cargo";
    $read = $connection->stm->prepare($sql);
    $read->execute();
    $cargoobj = $read->fetchAll(PDO::FETCH_OBJ);
?>

    <section class="container-fluid shadow rounded">
        <form action="insert_person.php" method="post" class="p-4">
            <div class="row mb-4">
                <div class="col-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/2090px-Sena_Colombia_logo.svg.png" alt="senalogo" width="100px">
                </div>
                <div class="col-10 text-center pt-4" >
                    <h2>Formulario de Registro</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" placeholder="Ingrese su nombre" class="form-control">
                </div>
                <div class="col">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" placeholder="Ingrese su apellido" class="form-control" col>
                </div>
                <div class="col">
                    <label for="tel">Telefono</label>
                    <input type="text" name="tel" placeholder="Ingrese su telefono" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="adress">Direccion</label>
                    <input type="text" name="adress" placeholder="Ingrese su Direccion" class="form-control">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <label for="birthdate">Fecha de Nacimiento</label>
                    <input type="date" name="birthdate" class="form-control">
                </div>
                <div class="col">
                    <label for="email">Correo Electronico</label>
                    <input type="text" name="email" placeholder="Ingrese su e-mail" class="form-control" col>
                </div>
                <div class="col">
                    <label for="cargo">Seleccione su cargo</label>
                    <select name="cargo" id="cargo" class="form-control"><?php foreach ($cargoobj as $c){?>
                        <option value="<?php echo $c->no_cargo;?>">
                            <?php echo $c->nombre_cargo;?>
                        </option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" name="submit" value="Enviar" class="btn btn-success">
            </div>
        </form>
    </section>

<?php include('../Inc/footer.php'); ?>
