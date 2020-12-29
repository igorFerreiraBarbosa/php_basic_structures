<?php

class Pessoa {

    function falar() {
        echo "Olá, estou falando!";
    }

}

$igor = new Pessoa();

$igor->nome = "Igor Ferreira Barbosa";

echo $igor->nome;

echo "\n";

$igor->falar();

?>