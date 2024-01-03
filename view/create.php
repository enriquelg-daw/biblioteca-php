<?php //crea un nuevo registro en la base de datos
    require_once("layout/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" name="titulo" required class="form-control" id="titulo" aria-describedby="nombreHelp">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" name="autor" required class="form-control" id="autor" aria-describedby="nombreHelp">
        <label for="anyo_edicion" class="form-label">Año edicion</label>
        <input type="date" name="anyo_edicion" required class="form-control" id="anyo_edicion" aria-describedby="nombreHelp">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" name="precio" required class="form-control" id="precio" aria-describedby="nombreHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("layout/footer.php");
?>