<?php

$nota1 = 10;
$nota2 = 8;
$frequencia = 80;

$media = ($nota1 + $nota2) / 2;

if($media >=5 && $frequencia >= 75){
    echo "Aprovado";
}
else{
    echo "Reprovado";
}
?>