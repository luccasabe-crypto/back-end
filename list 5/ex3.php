<?php

$nota1 = 10;
$nota2 = 8;

$media = ($nota1 + $nota2) / 2;

if($media >=7){
    echo "Aprovado";
}elseif ($media >= 5 && $media <= 6.9){
    echo "Em recuperação";
}else{
    echo "Reprovado";
}
?>