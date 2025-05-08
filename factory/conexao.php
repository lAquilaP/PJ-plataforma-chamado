<?php
class Caminho {
    public static $usuario = "root";
    public static $senha = "";
    public static $dbname = "sistema_chamados";  // Nome do banco de dados
    public static $connect = null;
    
    private static function Conectar() {
        try {
            if (self::$connect == null) {
                self::$connect = new PDO('mysql:host=localhost;dbname=' . self::$dbname, self::$usuario, self::$senha);
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die();
        }
        return self::$connect;
    }

    public function getConn() {
        return self::Conectar();
    }
}
?>

