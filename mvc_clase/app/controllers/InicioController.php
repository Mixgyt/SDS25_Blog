<?php
    namespace app\controllers;

    class InicioController extends Controller{

        public function informacion(){
            $titulo = "Mi Informacion";
            $name_view = "InformacionView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"Informacion"]);
        }
    }
?>