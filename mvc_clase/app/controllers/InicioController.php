<?php
    namespace app\controllers;
    use app\models\UsuariosModel;

    class InicioController extends Controller{

        public function informacion(){
            $titulo = "Mi Informacion";
            $name_view = "InformacionView";
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"Informacion"]);
        }

        public function registro(){
            $titulo = "Registro";
            $name_view = "RegistroView";
            $usuarios = UsuariosModel::obtenerUsuarios();
            return $this->view($name_view,["title"=>$titulo,"pagina"=>"Registrar Visita","usuarios"=>$usuarios]);
        }

        public function registrar(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $nombre_usuario = $_POST['nombre_usuario'] ?? '';
                if(!empty($nombre_usuario)){
                    UsuariosModel::agregarUsuario($nombre_usuario);
                }
            }
            header("Location: /mvc_clase/public/registro");
            exit();
        }
    }
?>