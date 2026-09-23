<?php

$motorista = $_POST['nome'];
$veiculo = $_POST ['Tipo'];
$Estacionamento = $_POST ['horas'];


if($Estacionamento == "MOTO"){
    echo $Estacionamento * 5.00;
}
elseif($Estacionamento == "CARRO"){
    echo $Estacionamento * 8.00;
}
elseif($Estacionamento == "CAMINHONETE"){
    echo $Estacionamento * 12.00;
}
echo "Nome do Motorista é: $motorista <br>";
echo "Nome do Veiculo é: $veiculo <br>";
echo "Você tem que pagar: $Estacionamento <br>";
?>