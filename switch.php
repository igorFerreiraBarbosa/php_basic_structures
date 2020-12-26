<?php

$nota = 7;

switch($nota) {
    case 7:
        echo "Você está aprovado!";
        break;
    case 5:
        echo "Você está de AF!";
        break;
    case $nota <= 3:
        echo "Você está reprovado";
        break;        
}