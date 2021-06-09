<?php

class Lugares {
    var $id;
    var $user_id;
    var $local;
    var $pais;

    // Método para atribuir/buscar valores das variáveis
    public function __construct() {}

    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade) {
        return $this->propriedade;
    }
}

?>


