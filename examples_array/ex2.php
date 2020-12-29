<?php

$array = ["1" => "usuario1", "2" => "usuario2", "3" => "usuario3"];


function testFunction($valor, $chave) {
    echo "A chave $chave tem o valor $valor\n";
    
}

array_walk($array, "testFunction");
?>