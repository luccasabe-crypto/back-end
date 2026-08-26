<?php

$email = "isagi@gmail.com";
$senha = "yoishi123";
$ativo = true;
echo "login - Facebook<br>";

if($email == "isagi@gmail.com" && $senha == "yoishi123" && $ativo == true){
    echo "login autorizado...";
}
else{
    echo "usuarios ou senha invalidos...";
}
?>