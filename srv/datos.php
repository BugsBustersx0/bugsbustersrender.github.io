<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

devuelveJson([
  "nombre" => ["value" => "Neil"],
  "apellido" => ["value" => "Armstrong"],
  "genero" => ["value" => "orb"], // Tipo de nave
  "generacion" => ["value" => "X"], // Generación de la nave
  "edad" => ["valueAsNumber" => 38], // Edad del astronauta
  "numero" => ["value" => 1969], // Número de identificación galáctica
  "avance" => ["value" => 82], // Progreso de la misión
  "capacidad" => ["value" => 75], // Nivel de energía
  "temperatura" => ["valueAsNumber" => 22], // Temperatura interior
  "aprobado" => ["checked" => true], // Aprobado para salir de la atmósfera
  "gracioso" => ["value" => true], // Humor cósmico
  "emplacado" => ["value" => true], // Emplacado interplanetario
  "direccion" => ["textContent" => "Base Kennedy\nCabo Cañaveral"],
  "encabezado" => ["innerHTML" => "<em>Comandante en <strong>misión lunar</strong>"],
  "nacimiento" => ["value" => "1930-08-05"],
  "imagen1" => [
    "src" => "/../imgs/apolo11.jpg"
  ],
  "imagen2" => ["src" => "", "hidden" => true],
  "pasatiempos[]" => ["fut", "basket"], // Entrenamientos: Gravedad cero y Caminata espacial
  "madrugador" => ["si"], // ¿Listo para el despegue?
  "patos[]" => ["paco", "luis"], // Compañeros: Ingeniera Nova, Doctor Quásar
]);
