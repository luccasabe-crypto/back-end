<?php

$Gasolina = $_POST['combustivel'];
$Quantidade_Combustivel = $_POST ['litros'];


if($Gasolina == "ETANOL"){
    echo $Quantidade_Combustivel * 4.20;
}
elseif($Gasolina == "DIESEL"){
    echo $Quantidade_Combustivel * 6.00;
}
elseif($Gasolina == "GASOLINA"){
    echo $Quantidade_Combustivel * 6.20;
}
?>