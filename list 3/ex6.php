<?php

$valorPedido = 100;
$valorMinimoEntrega = 50;
$idadeMinimaBebidaAlcoolica = 18;
$estoque = 10;
$quantidadePedida = 6;
$statusPedido = "pago";

if($valorPedido >= $valorMinimoEntrega){
    echo"liberar entrega grátis!";
}
else{
    echo "taxa de entrega: $5,00";
}
echo"<br>";
if($idadeMinimaBebidaAlcoolica >= 18 ){
    echo "pode comprar bebida";
}
else{
    echo "não pode comprar bebida";
}
echo"<br>";
if($quantidadePedida <= $estoque){
    echo "Estoque suficiente";
}
else{
    echo "Estoque insuficiente";
   
}
echo"<br>";
if($statusPedido == "pago"){
    echo "liberado para produção";
}
else{
    echo "Não liberado para produção";
}
echo"<br>";
?>