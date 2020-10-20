

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DEL OCTÓGONO POR SU LONGITUD</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<form  method="post" action="index.php" class="login-form">
    <h3 class="text-center font-italic ">RESULTADO</h3>
    <?php
    $lado= $_POST['lado'];
    $respuesta='El área del octogono con una longitud de ' . $lado . 'cm,tiene un área igual a:';
    $area=null;
    $ladocuadrado=null;
    $tangente=null;
    
    $ladocuadrado=pow($lado,2);
    $tangente=tan((pi()/8));

    $area=((2*$ladocuadrado)/$tangente);
    
    echo "$respuesta $area"." cm<sup>2</sup>.";

    ?>
  <input type="submit" name="regresar" value="Regresar" class="login-submit btn btn-success btn-block" />
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
