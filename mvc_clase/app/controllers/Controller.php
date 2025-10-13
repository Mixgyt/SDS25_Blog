<?php
    namespace app\controllers;
    
    class Controller{
        public function index(){
            return $this->view($this->get_view(),["title"=>$this->get_name(),"pagina"=>$this->get_name()]);
        }

        protected function view(string $vista, Array $data){
            if(file_exists("../app/views/$vista.php")){
                if(file_exists("../app/views/Body.php" )){
                    extract($data);
                    ob_start();
                    include "../app/views/Body.php";
                    return ob_get_clean();
                }
                else{
                    echo "Archivo body.php no encontrado";
                }
            }
            else{
                echo "Archivo $vista.php no ha sido encontrado";
            }
        }

        protected function get_view(){
            $n_class = str_replace("app\\controllers\\","",static::class);
            return str_replace("Controller","View",$n_class);
        }

        protected function get_name(){
            return str_replace("View","",$this->get_view());
        }
    }
?>