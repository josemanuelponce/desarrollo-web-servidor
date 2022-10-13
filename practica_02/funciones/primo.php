<?php

function isPrime($num){
   $cont = 0;
      for ($i=1; $i <= $num; $i++) {
         if ($num % $i==0) $cont = $cont + 1;
      }
   if ($cont==2) return true;
      return false;
   }
?>