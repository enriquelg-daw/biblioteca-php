<?php //controla las funciones del metodo CRUD
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("../model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($titulo, $autor, $anyo_edicion ,$precio){
            $id = $this->model->insertar($titulo, $autor, $anyo_edicion, $precio);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $titulo, $autor, $anyo_edicion, $precio){
            return ($this->model->update($id,$titulo,$autor, $anyo_edicion, $precio) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.view.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>