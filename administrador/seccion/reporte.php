<?php include("../template/cabecera.php"); ?>
<?php

$txtTipo=(isset($_POST['txtTipo']))?$_POST['txtTipo']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtEstado=(isset($_POST['txtEstado']))?$_POST['txtEstado']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/db.php");

switch($accion){


        case"Agregar":

            $sentenciaSQL = $conexion->prepare("INSERT INTO tickets (tipo_p, descrip, estado, imagen) VALUES (:tipo, :descripcion, :estado, :imagen)");
            $sentenciaSQL->bindParam(':tipo', $txtTipo);
            $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
            $sentenciaSQL->bindParam(':estado', $txtEstado);
            $sentenciaSQL->bindParam(':imagen', $txtImagen);
            $sentenciaSQL->execute();

            echo "Presionando botón agregar";
            break;
            case"Modificar":
                echo "Presionando botón agregar";
                break;
                case"Cancelar":
                    echo "Presionando botón agregar";
                    break;
}      

$sentenciaSQL=$conexion->prepare("SELECT * FROM tickets");
$sentenciaSQL->execute();
$listaReportes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-md-6">
    
    <form method="POST" enctype="multipart/form-data">
    
    
    <div class = "form-group">
    <label for="txtTipo">TIPO DE PROBLEMA:</label>
    <input type="text" class="form-control" name="txtTipo" id="txtTipo" placeholder="Inserte tipo de Problema (Hardware, Software o Redes)">
    </div>

    <div class = "form-group">
    <label for="txtDescripcion">DESCRIPCION:</label>
    <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="Inserte Descripción del problema">
    </div>
   
    <div class = "form-group">
    <label for="txtEstado">ESTADO:</label>
    <input type="text" class="form-control" name="txtEstado" id="txtEstado" placeholder="Inserte Estado (Pendiente o Finalizado)">
    </div>

    <div class = "form-group">
    <label for="txtImagen">Adjuntos (Opcional):</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Inserte Imagen">
    </div>
    
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>
    
    
    </form>
    <br/>
    
    

</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <td>Tipo de problema</td>
                <td>Descripción</td>
                <td>Estado</td>
                <td>Adjuntos.png</td>
                <td>Acción</td>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaReportes as $reporte){ ?>
            <tr>
                <td><?php echo $reporte['id']?></td>
                <td><?php echo $reporte['tipo_p']?></td>
                <td><?php echo $reporte['descrip']?></td>
                <td><?php echo $reporte['estado']?></td>
                <td><?php echo $reporte['imagen']?></td>
                
                <td>Seleccionar | Borrar</td>
            </tr>
            <?php } ?>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("../template/pie.php"); ?>