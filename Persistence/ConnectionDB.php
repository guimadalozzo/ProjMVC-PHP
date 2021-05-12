<?php
    class ConnectionDB extends PDO {
        private static $instance = null;

        public function __construct($dsn, $usuario, $senha) {
            parent::__construct($dsn, $usuario, $senha);
        }

        public static function getInstance() {
            if (!isset(self::$instance)) {
                try {
                    // Cria uma conexão e retorna a instância dela
                    self::$instance = new ConnectionDB(
                        "mysql:dbname=aula_php;host=localhost",
                        "root",
                        "root1706"
                    );
                    echo "Conexão ao banco de dados efetuada com sucesso!";
                } catch (Exception $e) {
                    echo "Ocorreram erros ao tentar conectar ao banco de dados!";
                    echo $e;
                    die();
                    exit();
                }
            }
            return self::$instance;
        }
    }
?>

