<?php

$motorista = $_POST['nome'];
$veiculo = $_POST ['Tipo'];
$estacionamento = $_POST ['horas'];

echo "Nome do Motorista é: $motorista <br>";
echo "Veiculo é: $veiculo <br>";

if($veiculo == "MOTO"){
    echo "Você vai pagar R$", $estacionamento * 5.00;
}
elseif($veiculo == "CARRO"){
    echo "Você vai pagar R$", $estacionamento * 8.00;
}
elseif($veiculo == "CAMINHONETE"){
    echo "Você vai pagar R$", $estacionamento * 12.00;
}
?>
