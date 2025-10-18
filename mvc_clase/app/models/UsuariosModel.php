<?php
    namespace app\models;
    use lib\Database;

    class UsuariosModel{
        public string $nombre;

        public static function agregarUsuario($nombre){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO tbl_usuarios (nombre) VALUES (:nombre)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
        }

        public static function obtenerUsuarios(){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("SELECT * FROM tbl_usuarios");
            $stmt->execute();
            $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $usuarios;
        }
    }
?>