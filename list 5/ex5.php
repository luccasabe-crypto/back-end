<?php

$nome = "Kenzo";
$nivel_acesso = 3;

if($nivel_acesso == 1){
    echo "Acesso básica";
}
else if($nivel_acesso == 2){
    echo "Acesso intermediário";
}
else if($nivel_acesso == 3){
    echo "Acesso Administrador";
}
else{
    echo "Acesso inválido!";
}
?>