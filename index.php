<!DOCTYPE html>
<html lang="ES">
<head>
    <link rel="stylesheet" href="Public/Css/style.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/semantic.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Management System</title>
</head>
    <body>
    <div class="ui stackble menu">
        <div class="item">
            <img src="Public/Img/pogchamp_icon.png" alt="...">
        </div>
        <div class="ui dropdown item">
            Personas
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="crud/index.php" class="item">Registrar Persona</a>
                <a href="crud/listado.php" class="item">Listado de Personas</a>
            </div>
        </div>
        <div class="ui dropdown item">
            Cargo
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="crud/cargo/cargo_form.php" class="item">Crear Nuevo Cargo</a>
                <a href="crud/cargo/listado_cargo.php" class="item">Listado de Cargos</a>
            </div>
        </div>  
    </div>

        <div class="container-fluid m-5 text-center">
            <h2>Bienvenido a SABDIS</h2>
            <h6>(Sistema de Administracion de Bases de Datos de la Institucion Sena)</h6>
        </div>

    </body>
    <script src="Public/Js/jquery-3.1.1.min.js"></script>
    <script src="Public/Js/semantic.js"></script>
    <script>
        $('.ui.dropdown').dropdown();
    </script>
</html>
