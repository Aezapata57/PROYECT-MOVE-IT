<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/head.php");
    require_once("c://xampp/htdocs/MOVE-IT/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando solicitud</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Direccion_origen</label>
        <div class="col-sm-10">
            <input type="text" name="Direccion_origen" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Direccion_destino</label>
        <div class="col-sm-10">
            <input type="text" name="Direccion_destino" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Hora</label>
        <div class="col-sm-10">
            <input type="text" name="Hora" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Dia</label>
        <div class="col-sm-10">
            <input type="text" name="Dia" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Tipo de servicio</label>
        <div class="col-sm-10">
            <input type="text" name="Tipo_servicio" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Cantidad</label>
        <div class="col-sm-10">
            <input type="text" name="Cantidad" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/footer.php");
?>