<?php
  function calcularCClavos($A,$B,$C) //FUNCIÓN RECIBE LOS 3 VALORES A[K] // B[K] // C[I]
  {
    $pos = [];
    for ($t = 0; $t < count($A); $t++){
      $pos [] = false;// GENERA UN MAPA DE TABLONES CLAVADOS CON VALORES FALSOS
    }
    $cant = 0;
    for($clavo=0; $clavo < (count($C));$clavo++){
      for ($tablon=0; $tablon < (count($A)); $tablon++) {
        if($A[$tablon]<= $C[$clavo] && $C[$clavo] <= $B[$tablon]){ //COMPROBAR QUE A [K] ≤ C [I] ≤ B [K].
            $pos[$tablon] = true; //SI EL TABLÓN SE CLAVA GUARDA SU ESTADO EN EL MAPA
          }
        }
        $cant++;
         if(check($pos)){
           return $cant; //ESTANDO TODOS LOS TABLONES CLAVADOS DEVUELVE LA CANTIDAD DE CLAVOS UTILIZADOS
         }
      }
     return -1; //SI SE ACABARON LOS CLAVOS Y LA FUNCIÓN 'check()' NO RETORNO TRUE SE DEVUELVE -1 ASUMIENDO QUE NO SE LLEGARON A CLAVAR TODOS LOS TABLONES
  }
  function check($pos){ //CORROBORA QUE LOS TABLONES ESTÉN TODOS CLAVADOS
    foreach ($pos as $value) {
          if(!$value){
            return false;
          }
    }
    return true;
  }
$A = [1,4,5,8]; //DATOS UTILIZADOS EN EL EJEMPLO
$B = [4,5,9,10];  //DATOS UTILIZADOS EN EL EJEMPLO
$C = [4,6,7,10,2]; //DATOS UTILIZADOS EN EL EJEMPLO

echo calcularCClavos($A,$B,$C); //IMPRESIÓN DEL VALOR OBTENIDO
?>
