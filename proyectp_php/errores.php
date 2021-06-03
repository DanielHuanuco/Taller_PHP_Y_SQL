<?php
// error de compilaciom de simtaxisom 
/*echo 'hola';
echo 'hi';
echo 'xdxdxd';
*/
//fatal error -> detieme la ejecucciom completamemte 
/*
echo 'hola';
noExiste();
echo 'adios';
*/
// warmig -> advertemcia seguira la ejecuciom 
/*
echo 'hola';
include("Archivo.php");
echo 'Adios';*/
//motacie -> avisas el tiempo de ejecuciom , detalles
$result;
echo 'Resultado '.$result;

echo 'Adios';
trigger_error("error!!!!!!!!",E_USER_NOTICE)
?>