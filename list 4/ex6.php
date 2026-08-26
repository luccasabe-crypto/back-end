<?php

$idade_cliente = 18;
$deficiencia = "false";
$gestante = "false";

if($deficiencia == "true" || $gestante == "true" || $idade_cliente >= 60){
    echo "Atendimento prioritario";
}
else{
    echo "Atendimento normal";
}
?>