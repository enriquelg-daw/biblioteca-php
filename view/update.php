<?php //actualizar datos de un registro
    require_once("../controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'], $_POST['titulo'], $_POST['autor'], $_POST['anyo_edicion'], $_POST['precio']);

?>