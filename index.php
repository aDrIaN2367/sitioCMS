<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>

    <br>

        <h1>Inyeccion en base de datos con formulario</h1>

    <br>

    <form  method="post">
    <label>Titulo
        <input name="titulo" type="text">
    </label>
    <label>Autor
        <input name="autor" type="text">
    </label>
        <label>descripcion
            <input name="descripcion" type="text">
        </label>

        <input type="submit" value="Insertar"  >

    </form>

    <br>

    <?php
    echo "<br>";
    require ('Conexion.php');
    $conexion = new Conexion();
    $conexion->gestion();
    $conexion->mostrarDatos();
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>