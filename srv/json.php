<?php

require_once __DIR__ . "/../lib/php/recuperaJson.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$json = recuperaJson();
$ciudad = $json->ciudad;
$temperatura = $json->temperatura;
$clima = $json->clima;
$humedad = $json->humedad;
$viento = $json->viento;
$salida = $json->salida;
$puesta = $json->puesta;
$resultado =
 "{$ciudad} \n{$temperatura} \n{$clima} \n{$humedad} 
 \n{$viento} \n{$salida} \n{$puesta}.";
devuelveJson($resultado);
