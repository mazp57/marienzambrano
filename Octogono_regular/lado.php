<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULAR OCTÓGONO POR SU LONGITUD</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<form  method="post" action="./ejecutar.php" class="login-form">
    <h3 class="text-center font-italic ">CALCULO DE UN OCTÓGONO REGULAR POR SU LONGITUD</h3>

  <input type="number" class="cateto-a" autofocus="true" required="true" name="lado" placeholder="Escriba longitud del lado en cm" />
  <input type="submit" name="btn" value="Calcular" class="login-submit  btn btn-success btn-block" />
  <input type="reset" name="limpiar" value="Limpiar" class="login-submit btn btn-info btn-block" />
  <a href="index.php" class="login-submit btn btn-danger btn-block">Regresar</a>
  <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright Marien Zambrano:
    
  </div>
  <!-- Copyright -->

</footer>
</form>
<div class="underlay-photo"></div>

</body>
</html>