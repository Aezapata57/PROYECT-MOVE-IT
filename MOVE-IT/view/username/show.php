<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/head.php");
    require_once("c://xampp/htdocs/MOVE-IT/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles de la solicitud</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la solicitud?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar la solicitud
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Direccion_origen</th>
            <th scope="col">Direccion_destino</th>
            <th scope="col">Hora</th>
            <th scope="col">Dia</th>
            <th scope="col">Tipo_servicio</th>
            <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["Direccion_origen"]?></td>
            <td scope="col"><?= $date["Direccion_destino"]?></td>
            <td scope="col"><?= $date["Hora"]?></td>
            <td scope="col"><?= $date["Dia"]?></td>
            <td scope="col"><?= $date["Tipo_servicio"]?></td>
            <td scope="col"><?= $date["Cantidad"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/footer.php");
?>