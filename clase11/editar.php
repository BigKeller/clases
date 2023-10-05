<?php

include("conexion.php");
$id_recibido = $_GET["id_enviado"];
$consulta = "SELECT * FROM marcas where id=" .$id_recibido."";
$respuesta = mysqli_query($conexion, $consulta);

while ($row = mysqli_fetch_assoc($respuesta)) {
$nombre =$row["nombre"];
$origen =$row["origen"];
$logo =$row["logo"];
$id=$row
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerciciosphp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="guardar.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">nombre</span>
                        <input type="text" class="form-control" name="nombre" placeholder="peugeot "value="<?php echo $nombre ?>">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="origen">
                            <option selected>origen</option>
                            <option value="1">japon</option>
                            <option value="2">francia</option>
                            <option value="3">china</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">logo</span>
                        <input type="text" class="form-control" name="logo" placeholder="../logo_peugeot.png"value="<?php echo $nombre ?>">
                    </div>
                    <button type="submit" class="btn btn-danger">submit</button>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>