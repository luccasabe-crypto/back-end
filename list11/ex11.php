<?php

$name = $_POST ['nome'];
$idade = $_POST ['num'];
$serviço_escolhido = $_POST ['Corte'];

if($serviço_escolhido == 1){
    echo "Corte R$ 30,00";
}elseif ($serviço_escolhido == 2){
    echo "Barba: R$ 20,00";
}else{
    echo "Corte + Barba: R$ 45,00";
}
?>


