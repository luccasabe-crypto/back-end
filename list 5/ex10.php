<?php

$altura= 1.76;
$peso= 61;
$result= $peso / ($altura * $altura); 
echo "IMC: ".$result;

 if($result >= 19 && $result < 24){ echo " -Peso ideal"; 
 } 
 else if($result >= 25 && $result < 29){ echo " -Sobrepeso";
 }
  else if($result >= 30 && $result < 34){ echo " -Obesidade grau 1"; 
 }
   else if($result >= 35 && $result < 39){ echo " -Obesidade grau 2"; 
 } 
   else{ echo " -Obesidade grau 3"; }