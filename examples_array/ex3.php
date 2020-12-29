<?php
$senhas = ["usuario1" => "senha1", "usuario2" => "senha2", "usuario3", "senha3"];

$chave = array_search("usuario4", $senhas);

if($chave != "usuario1") {
    echo "\n\nA chave não é usuario1!";
} else {
    echo "\n\nA chave é usuario1!";
}
?>