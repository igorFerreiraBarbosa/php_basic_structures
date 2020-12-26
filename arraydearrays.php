<?php


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

// Exemplo básico de trabalho com array de arrays com array_walk_recursive
function testFunction($valor, $chave) {
    echo "A $chave tem o valor $valor\n";
    
}


array_walk_recursive($alunos, "testFunction");

?>

