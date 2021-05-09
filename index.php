<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="estilos.css">
    <script src="main.js" defer></script>
    <title>Inicio</title>
  </head>
  <body>
<!--LIBRO-->
    <div class="book">
      <div class="front-cover">
        <div class="first-half"></div>
        <div class="second-half"></div>
      </div>
      <div class="back-cover"></div>
    </div>
<!--MENÚ-->
    <header class="header">
      <div class="container">
      <div class="btn-menu">
        <label for="btn-menu">☰</label>
      </div>
      <div class="logo">
				<h1>Menú</h1>
			</div>
    </header>
  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
        <a href="index.php">Inicio</a>
        <a href="concepto.php">Concepto / Idea</a>
        <a href="referentes.php">Referentes</a>
        <a href="proceso.php">Proceso</a>
        <a href="publicacion.php">Publicación</a>
        <a href="estatement.php">Statement</a>
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
  <div class="textoayuda">
    Al pasar el cursor sobre la imagen <br>
    hacia los bordes esta se mueve.<br><br>
    Al dar click sobre la misma <br>
    se ve la contraportada.
  </div>
  </body>
</html>
