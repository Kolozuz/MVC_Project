<?php include('cargo_header.php');?>

<?php
include '../connection.php';
$connection = new Connection();
$connection->db_connect();
$sql = "SELECT * FROM tbl_cargo";
$read = $connection->stm->prepare($sql);
$read->execute();
$cargos = $read->fetchAll(PDO::FETCH_OBJ);
?>

    <section class="container-fluid">
        <div class="p-10">
            <h2>Listado de Cargos</h2>
        </div>
    <table class="table table-striped table-hover mt-4">
        <tr>
            <th class="col-5">No° Cargo</th>
            <th class="col-5">Nombre Cargo</th>
            <th class="col-2">Acciones</th>
        </tr>

<?php 
    foreach($cargos as $a){?>
        <tr>
            <td><?php echo $a->no_cargo;?></td>
            <td><?php echo $a->nombre_cargo;?></td>

            <td>
                <a href="update_cargo_form.php?no=<?php echo $a->no_cargo;?>">
                    <button class="btn btn-primary">Update</button>
                </a>

                <button class="btn btn-warning" onclick="borrar('<?php echo $a->no_cargo;?>')">
                    Delete
                </button>
            </td>
        </tr>
<?php } ?>

    </table>
    </section>

    <script src="../../Public/Js/sweetalert.min.js">
        
    </script>

    <script>
        let no;
        function borrar(no){
            swal({
            title: "Esta seguro de que desea borrar los datos?",
            text: "Una vez eliminado, no sera posible recuperar ningun dato!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("El registro fue borrado con exito!", {
                icon: "success",
            });
            location.href = 'delete_cargo.php?no=' + no;
            } else {
                swal("No se borro el registro!");
            }
});
        }

    </script>
<?php include('cargo_footer.php');?>