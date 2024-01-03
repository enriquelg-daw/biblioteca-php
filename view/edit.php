<?php //edicion de un registro
    require_once("layout/head.php");
    require_once("../controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="id" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="titulo" class="col-sm-2 col-form-label">Nuevo Titulo</label>
        <div class="col-sm-10">
            <input type="text" name="titulo" class="form-control" id="titulo" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="autor" class="col-sm-2 col-form-label">Nuevo Autor</label>
        <div class="col-sm-10">
            <input type="text" name="autor" class="form-control" id="autor" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="anyo_edicion" class="col-sm-2 col-form-label">Nuevo Año Edicion</label>
        <div class="col-sm-10">
            <input type="date" name="anyo_edicion" class="form-control" id="anyo_edicion" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="precio" class="col-sm-2 col-form-label">Nuevo Precio</label>
        <div class="col-sm-10">
            <input type="number" name="precio" class="form-control" id="precio" value="<?= $user[4]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("layout/footer.php");
?>