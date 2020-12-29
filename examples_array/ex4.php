<?php

$items = ["item1" => "casa", "item2" => "carro", "item3" => "bola"];

if(array_key_exists("item2", $items)) {
    echo "\nA chave item2 existe!";
} else {
    echo "\nA chave informada não existe!";
}

?>