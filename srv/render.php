<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
    "nombre" => "CARRILLO SANTIAGO LEONARDO",
    "chiste" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!"
  ],
  [
    "nombre" => "DE LA CRUZ GONZÁLEZ MIGUEL ÁNGEL",
    "chiste" => "¿Qué le dice una iguana a su hermana gemela? Somos iguanitas."
  ],
  [
    "nombre" => "JIMÉNEZ MERCADO AGUSTÍN",
    "chiste" => "¿Qué hace un pez? ¡Nada!"
  ],
  [
    "nombre" => "TORRES ALMAZÁN LUIS FERNANDO",
    "chiste" => "—¿Sabías que tengo un chiste sobre informática? —Sí, pero no tiene sentido binario."
  ],
  [
    "nombre" => "VALENCIA MIGUEL MARCO ANTONIO",
    "chiste" => "¿Por qué los pájaros no usan Facebook? ¡Porque ya tienen Twitter!"
  ]
];

$render = "";
foreach ($lista as $modelo) {
  $nombre = htmlentities($modelo["nombre"]);
  $chiste = htmlentities($modelo["chiste"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$chiste}</dd>";
}

devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
