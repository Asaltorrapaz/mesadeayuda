<?php include("../template/cabecera.php"); ?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";

?>

<div class="col-md-6">
    
    <form method="POST" enctype="multipart/form-data">
    
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="Inserte ID">
    </div>
    
    
    <div class = "form-group">
    <label for="txtTipo">TIPO DE PROBLEMA:</label>
    <input type="text" class="form-control" name="txtTipo" id="txtTipo" placeholder="Inserte tipo de Problema (HARDWARE, SOFTWARE o REDES)">
    </div>

    <div class = "form-group">
    <label for="txtDescripcion">DESCRIPCION:</label>
    <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="Inserte Descripción del problema">
    </div>
   
    <div class = "form-group">
    <label for="txtFecha">FECHA:</label>
    <input type="text" class="form-control" name="txtFecha" id="txtFecha" placeholder="Inserte la Fecha de inicio del problema">
    </div>

    <div class = "form-group">
    <label for="txtHora">HORA:</label>
    <input type="text" class="form-control" name="txtHora" id="txtHora" placeholder="Inserte la hora de inicio del problema">
    </div>

    <div class = "form-group">
    <label for="txtHoraR">TIEMPO DE RESOLUCION:</label>
    <input type="text" class="form-control" name="txtHoraR" id="txtHoraR" placeholder="Inserte la hora de finalización del problema">
    </div>

    <div class = "form-group">
    <label for="txtEstado">Adjuntos (Opcional):</label>
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
                <td>Fecha</td>
                <td>Hora</td>
                <td>Tiempo de resolución</td>
                <td>Adjuntos.png</td>
                <td>Acción</td>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Redes</td>
                <td>ever tapado las redes acuiferas del baño</td>
                <td>18/10/2023</td>
                <td>14:03 p.m.</td>
                <td>2 Hr</td>
                <td>Adjuntos.png</td>
                <td>Seleccionar | Borrar</td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("../template/pie.php"); ?>