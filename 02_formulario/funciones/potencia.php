<?php
function potencia (int $base, int $exponente){
    $resultado = null;
    if($exponente < 0){
        $resultado = -1;
    }elseif($exponente==0){
        $resultado=1;
    }else {

        for($i =0;$i<=$exponente;$i++){
            $resultado *=$base;
        }
    }
    return $resultado;

}
?>