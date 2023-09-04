<?php
$numero1=20;
try{
    $numero3=$numero1+"f";
    echo $numero3;

}catch(\throwable $th){
    echo"Error controlado";
}

?>