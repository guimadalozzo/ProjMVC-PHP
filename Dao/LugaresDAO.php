<?php
    include '../Persistence/ConnectionDB.php';

    class LugaresDAO {
        private $connection = null;

        public function __construct() {
            $this->connection = ConnectionDB::getInstance();
        }

        public function create($lugar) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO lugares (user_id, local, pais) VALUES (?,?,?)"
                );

                $statement->bindValue(1, $lugar->user_id);
                $statement->bindValue(2, $lugar->local);
                $statement->bindValue(3, $lugar->pais);

                $statement->execute();

                // var_dump($statement); die();

                // Encerra a conexão com o BD
                $this->connection = null;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao inserir novo usuário!";
                echo $e;
            }
        }
    }

?>

