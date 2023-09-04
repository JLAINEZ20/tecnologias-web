<?php
/*
Vamos a crear una clase que tenga 3 funciones:
Funcion depositar: Esta funcion permitira aumentar el saldo.
Funcion retirar: esta funcion permitira debitar el saldo.
Funcion mostrar saldo: esta funcion mostrara el saldo actual.
Probar las funcione.
*/

$saldo=1000;
$saldo=depositar(300);
$saldo=retirar(100);
$saldo=depositar(120);
mostrarSaldo();

function depositar($monto){
    global $saldo;
    $saldoActual=$saldo+$monto;
    return $saldoActual;
}

function retirar($monto){
    global $saldo;
    if($monto<=$saldo){
        $saldoActual=$saldo-$monto;

    }else{
        $saldoActual=$saldo;
    }
    return $saldoActual;
}

function mostrarSaldo($monto){
    global $saldo;
    echo "saldo: $saldo";
}

?>