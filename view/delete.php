<?php //elimina un registro por id
    require_once("../controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>