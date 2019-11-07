<?php

  function anagrama($cadena,$subcadena){
    $cad =  str_split(strtolower($cadena));       //PASO LAS CADENAS DE TEXTO A MINUSCULAS PARA NO DISTINGUIR
    $subcad = str_split(strtolower($subcadena)); // Y LAS SE CONVIERTEN EN UN ARRAY

    $status = 0;
    $cant = 0;

    foreach ($cad as $c) {
      $prev = $status;     //ESTADO ANTERIOR DEL COMPROBADOR
                              //
      if (in_array($c, $subcad)) {  //COMPRUEBA QUE UNA DE LAS LETRAS DE
        $status++;                  //LA SUBCADENA COINCIDA CON LA LETRA DE LA CADENA
      }
      if ($prev == $status){ //SI EL ESTADO NO CAMBIO ASUME QUE LA LETRA NO COINCIDIO Y BORRA EL REGISTRO
        $status =0;
      }
      if($status == count($subcad)){ //SI EL ESTADO ES IGUAL A LA CANTIDAD DE LETRAS DE
        $cant++;                     //  LA SUBCADENA SUMA 1 AL RESULTADO
                                    //
        $status = 0;//REINICIA ESTADO PARA NO SUMAR DATOS FALSOS
      }
    }
    return $cant; //AL FINALIZAR DE RECORRER LA CADENA RETORNA EL RESULTADO
  }

echo anagrama("hola, que buena ola Laomir", "oal");
 ?>
