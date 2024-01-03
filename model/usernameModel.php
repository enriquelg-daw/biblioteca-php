<?php //controla los accesos a los datos de la base de datos
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($titulo, $autor, $anyo_edicion ,$precio){
            $stament = $this->PDO->prepare("INSERT INTO libros VALUES(null,:titulo, :autor, :anyo_edicion, :precio)");
            $stament->bindParam(":titulo",$titulo);
            $stament->bindParam(":autor",$autor);
            $stament->bindParam(":anyo_edicion",$anyo_edicion);
            $stament->bindParam(":precio",$precio);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM libros where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM libros");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $titulo, $autor, $anyo_edicion ,$precio){
            $stament = $this->PDO->prepare("UPDATE libros SET titulo = :titulo,  autor = :autor,  anyo_edicion = :anyo_edicion ,  precio = :precio WHERE id = :id");
            $stament->bindParam(":titulo",$titulo);
            $stament->bindParam(":autor",$autor);
            $stament->bindParam(":anyo_edicion",$anyo_edicion);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM libros WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>