<?php //guarda los datos de un registro
    require_once("../controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['titulo'], $_POST['autor'], $_POST['anyo_edicion'], $_POST['precio']);
?>