<?php

// Array associativo que irei trabalhar com os exemplos

$alunos = [
    $aluno1 = ["NOME" => "IGOR", "IDADE" => "24", "NOTA" => "7"],
    $aluno2 = ["NOME" => "JOSE", "IDADE" => "19", "NOTA" => "5"],
    $aluno3 = ["NOME" => "ANTONIO", "IDADE" => "34", "NOTA" => "8"],
];

foreach($alunos as $aluno) {
    if($aluno["NOTA"] > 5) {
        
        echo "Aluno: {$aluno["NOME"]} - {$aluno["NOTA"]} - ALUNO APROVADO\n";
    }

    else {

        echo "Aluno: {$aluno["NOME"]} - {$aluno["NOTA"]} - ALUNO REPROVADO\n";
    }
}

// Exemplo básico de trabalho com array associativo com array_walk

function testFunction($valor, $chave) {
    echo "A $chave tem o valor $valor\n";
    
}

array_walk($aluno, "testFunction");

// Exemplo básico de trabalho com array associativo com array_filter

$alunosMQ7 = array_filter($alunos, function($aluno) {
    return $aluno["NOTA"] >= 7;
});

print_r($alunosMQ7);

// Exemplo básico de trabalho com array de arrays com array_key_exists, mas nesse exemplo irei usar o $aluno1
// do array associativo $alunos

if(array_key_exists("ALUNO", $aluno1)) {
    echo "\nA chave NOME existe!";
} else {
    echo "\nA chave informada não existe!";
}

// Exemplo básico de trabalho com array de arrays com array_search, mas nesse exemplo irei usar o $aluno1 do
// array associativo $alunos

$chave = array_search("IGOR", $aluno1);

if($chave != "NOME") {
    echo "\n\nA chave não é NOME!";
} else {
    echo "\n\nA chave é NOME!";
}

?>

