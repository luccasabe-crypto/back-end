<?php

echo "Bem vindo a LK BET <br>";
echo "Acerte o numero de 0 a 20 e ganhe 20 vezes mais! <br>";

$aposta = 10000;
$numero_escolhido = 29;

if ($numero_escolhido == $numero_escolhido+1){
    echo "Você ganhou ",$aposta*20;
}
else{
    echo"Quase la...Seu numero: $numero_escolhido <br>";
    echo"Numero sorteado: ", $numero_escolhido + 1;
}
?>