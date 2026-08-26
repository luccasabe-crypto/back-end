<?php

$usuario = "Senshou";
$idade = 19;

if($idade < 13){
    echo "Cadastro nao permitido! 🚓";
}
else if ($idade >=13 && $idade <16){
    echo "Só pode usar a plataforma com controle dos País!";
}else{
    echo "Plataforma liberada!!!";
}
?>