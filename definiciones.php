<!DOCTYPE html>
<html lang="es">

<head>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width">

 <title>Render en el servidor</title>

 <a href="index.html">Inicio</a>

 <script type="module" src="lib/js/consumeJson.js"></script>
 <script type="module" src="lib/js/muestraObjeto.js"></script>
 <script type="module" src="lib/js/muestraError.js"></script>

</head>

<body onload="consumeJson('srv/render.php')
  .then(respuesta => muestraObjeto(document, respuesta.body))
  .catch(muestraError)">

 <h1>Render en el servidor</h1>

 <dl id="lista">
  <dt>Cargando…</dt>
  <dd><progress max="100">Cargando…</progress></dd>
 </dl>

</body>

</html>