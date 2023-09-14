<?php
require('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/e194f3e40d.js" crossorigin="anonymous"></script>
</head>

<body>
    
<div class="container-fluid">

    <header class="row d-flex">
        <div class=" col-10">
            <h1 class="display-4" id="titulo">Agenda de contactos</h1>
        </div>

        <div class="col-2 ">


        <div class="bauble_box">
	        <input class="bauble_input" id="bauble_check" name="bauble" type="checkbox">
	        <label class="bauble_label" for="bauble_check">Toggle</label>
        </div>



        </div>
    </header>
</div>

<div class="row">
    <div class="col-12">
        <form action="datos.php" class="form" method="post">
            <label for="inputnombre" class="form-label">Nombre</label>
            <input type="text" readonly id="inputnombre"class="form-control" name="camponombre">

            <label for="inputdireccion" class="form-label">Direccion</label>
            <input type="text" readonly id="inputdireccion"class="form-control" name="campodireccion">

            <!-- <label for="inputtelefono" class="form-label">Numero de telefono</label>
            <input type="text" readonly id="inputtelefono"class="form-control"> -->

            <div class="row my-3">
                <div class="col-md-6 col-12">
                    <label for="caracteristica">Caracteristica</label>
                    <input type="number" name="campocaracteristica" id="caracteristica" class="form-control" >
                </div>

                <div class="col-md-6 col-12">
                    <label for="numerotelefono">Numero de telefono</label>
                    <input type="number" name="camponumero" id="numerotelefono" class="form-control" n>
                </div>
            </div>
            <input type="submit" value="ENVIAR" id="btnEnviar" class="btn btn-success btn-lg form-control mt-3">
           
            <!-- <button class="btn btn-lg btn-success mt-3">
               <i class="fa-sharp fa-solid fa-file-pdf"></i>
           </button> -->
        </form>
    </div>
    
    <div class=" col-12">
        <?php
        $conn->prepare("SELECT * FROM info_contactos");
        $stmt=$conn->prepare("SELECT * FROM info_contactos");
        $stmt->execute();

        $resultados=$stmt->fetchAll();

        ?>

    <table border="1" class="table" id="tablaContactos">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>CARACTERISTICA</th>
                <th>NUMERO</th>
                <th colspan="3">ACCIONES</th>
            </tr>
        </thead>

        <tbody>

        <?php 
            foreach($resultados as $fila){
                
                    echo "<tr>"; ?>
                            <td><?php echo $fila['NOMBRE']; ?></td>
                            <td><?php echo $fila['DIRECCION']; ?></td>
                            <td><?php echo $fila['CARACTERISTICA']; ?></td>
                            <td><?php echo $fila['NUMERO']; ?></td>
                            
                            <td>
                                <button class="btn btn-success">
                                <a href="http://wa.me/+54<?php echo $fila['NUMERO']; ?>" target="_blank">
                                <i class="fa-brands fa-square-whatsapp"> </i>
                                </a>
                                </button>
                            </td>

                            <td>
                                <button class="btn btn-info">
                                <a href="#">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </button>
                            </td>



                            <td>
                                <button class="btn btn-danger">
                                <a href="#">
                                <i class="fa-solid fa-trash-can"></i>
                                </a>
                                </button>
                            </td>

                    <?php echo"</tr>";

            }
        ?>
        </tbody>
    </table>


    </div>


</div>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="app.js"></script>
</html>