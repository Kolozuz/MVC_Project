<?php include('cargo_header.php');?>

<section class="container-fluid shadow rounded">
        <form action="insert_cargo.php" method="post" class="p-4">
            <div class="row mb-4 ">
                <div class="col-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/2090px-Sena_Colombia_logo.svg.png" alt="senalogo" width="100px">
                </div>
                <div class="col-10 text-center pt-4" >
                    <h2>Creacion de Cargos</h2>
                </div>
            </div>
            <div class="row mb-5 mt-4">
                <div class="col">
                    <label for="nombre_cargo">Nombre</label>
                    <input type="text" name="nombre_cargo" placeholder="Ingrese el nombre del cargo a crear " class="form-control">
                </div>
            </div>
            <div class="text-center">
                    <input type="submit" name="submit" value="Crear Cargo" class="btn btn-success">
                </div>
            </form>
    </section>

<?php include('cargo_footer.php');?>