<?php
//llamada a las funciones
holamundo();
saludar("Juan Carlos");

$num3=sumar(10,15);
echo"Suma: $num3";


function holamundo(){
    echo "Hola mundo";
}

function saludar($nombre){
    echo "Hola, $nombre";
}

function sumar($num1,$num2){
    $resultado=$num1+$num2;
    return $resultado;
}
?>