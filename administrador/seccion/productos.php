<?php include("../template/cabecera.php"); ?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtFecha=(isset($_POST['txtFecha']))?$_POST['txtFecha']:"";

?>

<div class="col-md-5">
    
    <form method="POST" enctype="multipart/form-data">
    
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="Inserte ID">
    </div>
    
    <div class = "form-group">
    <label for="txtFecha">Fecha y Hora de Creación:</label>
    <input type="text" class="form-control" name="txtFecha" id="txtFecha" placeholder="Inserte Fecha y Hora">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre del Solicitante:</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Inserte Nombre">
    </div>

    <div class = "form-group">
    <label for="txtUbicación">Ubicación:</label>
    <input type="text" class="form-control" name="txtUbicación" id="txtUbicación" placeholder="Inserte Ubicación">
    </div>

    <div class = "form-group">
    <label for="txtPrioridad">Prioridad:</label>
    <input type="text" class="form-control" name="txtPrioridad" id="txtPrioridad" placeholder="Inserte Prioridad">
    </div>

    <div class = "form-group">
    <label for="txtAsignado">Asignado a:</label>
    <input type="text" class="form-control" name="txtAsignado" id="txtAsignado" placeholder="Inserte Asignado">
    </div>

    <div class = "form-group">
    <label for="txtEstado">Estado del Ticket:</label>
    <input type="text" class="form-control" name="txtEstado" id="txtEstado" placeholder="Inserte Estado">
    </div>

    <div class = "form-group">
    <label for="txtFechaR">Fecha y Hora de Resolución:</label>
    <input type="text" class="form-control" name="txtFechaR" id="txtFechaR" placeholder="Inserte Fecha y Hora">
    </div>

    <div class = "form-group">
    <label for="txtComentarios">Comentarios Adicionales:</label>
    <input type="text" class="form-control" name="txtComentarios" id="txtComentarios" placeholder="Inserte Comentario">
    </div>

    <div class = "form-group">
    <label for="txtEstado">Adjuntos:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Inserte Imagen">
    </div>
    
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>
    
    </form>
    
    

</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora de Creación</th>
                <th>Nombre del Solicitante</th>
                <th>Ubicación</th>
                <th>Prioridad</th>
                <th>Asignado</th>
                <th>Estado del Ticket</th>
                <th>Fecha y Hora de Resolución</th>
                <th>Comentarios Adicionales</th>
                <th>Adjuntos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>14/10/23 10:40 a.m</td>
                <td>Maria jose</td>
                <td>Auditorio C</td>
                <td>Baja</td>
                <td>Tommy</td>
                <td>Finalizado</td>
                <td>14/10/23 13:40 p.m</td>
                <th>Tu mama xd.</th>
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