<?php
require_once  __DIR__.'/../vendor/autoload.php';
use Daw\model\consultas;
  $consulta=new consultas();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
    <?php
    $resultado=$consulta->borrarusuario($_POST['id']);
    echo "<a href='listadousuario.php'>Lista de Usuarios</a>";
     ?>
  </body>
</html>
