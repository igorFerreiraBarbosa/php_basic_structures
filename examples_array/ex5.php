<?php

$array = ["1" => "usuario1", "2" => "usuario1", "3" => "usuario3"];

$i = 0;

if(in_array("usuario1", $array) == 1) {
    echo "O usuario1 existe no array!\n";
} else {
    echo "O usuario1 não existe no array!";
}


?>