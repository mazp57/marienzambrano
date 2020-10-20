<?php 


include './assets/inc/funciones/funciones.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro exitosamente</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="container">
            <?php $index = 0; ?>
            <?php foreach ($arreglo as $array) :  ?>
            <?php $index++; ?>
            <div class="card text-left m-3">
                <div class="card-body">
                    <h4 class="card-title">Se ha registrado exitosamente el empleado numero <?php echo $index;?></h4>
                    <br>
                    
                    <div class="form-group">
                        <label for="first_name1">Nombres: </label>
                        <input type="text" id="first_name1" disabled value="<?php echo $array["nombres"]; ?>"
                            type="text" class="validate col-12">
                    </div>
                    <div class="form-group">
                        <label for="last_name1">Apellidos:</label>
                        <input type="text" class="validate col-12" disabled value="<?php echo $array["apelldios"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="cedula1">Cédula:</label>
                        <input type="number" class="validate col-12" disabled value="<?php echo $array["cedulas"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lugar1">Lugar:</label>
                        <input type="text" class="validate col-12" disabled value="<?php echo $array["lugar"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lugar1">Departamento:</label>
                        <input type="text" class="validate col-12" disabled <?php foreach ($departamentos as $departamento):  
                            if ($array["departamento"] == $departamento["value"] ){ echo "value='".$departamento["escrito"] . "'"; }
                             endforeach; ?>>
                    </div>
                    <div class="form-group">
                        <label for="sueldo1">Sueldo:</label>
                        <input disabled type="number" class="validate col-12" value="<?php echo $array["sueldo"]; ?>">
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>
            
        </div>
       
    </div>
    <a href="index.php" class="btn btn-success btn-block">Regresar</a>
</div>
<div class="underlay-photo"></div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./assets/js/index.js"></script>
    </body>

    </html>