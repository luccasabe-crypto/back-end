<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "luccas.abe@sp.senai.br" && $senha == "Lk777"){
    echo "Login,bem sucedido!";
}else{
    echo "Login ou senha invalida.";
}
?>