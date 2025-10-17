<?php
    namespace app\controllers;

    class PostController extends Controller{
        public function diauno(){
            $titulo = "Dia 1 - SDS 25";
            $name_view = "DiaUnoView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"DiaUno"]);
        }

        public function diados(){
            $titulo = "Dia 2 - SDS 25";
            $name_view = "DiaDosView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"DiaDos"]);
        }

        public function diatres(){
            $titulo = "Dia 3 - SDS 25";
            $name_view = "DiaTresView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"DiaTres"]);
        }

        public function diacuatro(){
            $titulo = "Dia 4 - SDS 25";
            $name_view = "DiaCuatroView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"DiaCuatro"]);
        }
    }
?>