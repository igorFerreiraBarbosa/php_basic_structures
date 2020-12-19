<?php

$alunos = array(
    array("NOME" => "IGOR", "IDADE" => "24", "NOTA" => "7"),
    array("NOME" => "JOSE", "IDADE" => "19", "NOTA" => "5"),
    array("NOME" => "ANTONIO", "IDADE" => "34", "NOTA" => "8")
);

foreach($alunos as $aluno) {
    if($aluno["NOTA"] > 5) {
        
        echo "Aluno: {$aluno["NOME"]} - {$aluno["NOTA"]} - ALUNO APROVADO\n";
    }

    else {

        echo "Aluno: {$aluno["NOME"]} - {$aluno["NOTA"]} - ALUNO REPROVADO\n";
    }
}