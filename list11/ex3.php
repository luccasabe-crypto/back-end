<?php

$nota1 = $_POST["valor1"];
$nota2 = $_POST["valor2"];
$nota3 = $_POST["valor3"];

$media = ($nota1 + $nota2 + $nota3)/3;

if($media >= 6){
    echo "Você passou, $media";
}
else{
    echo "Reprovado, $media";
}
?>