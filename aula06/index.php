<!doctype html>
<html lang="en">
  <head>
    <title>aula 6 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
        <h1>Projeto controle remoto</h1>
    <?php
    require_once "ControleRemoto.php";
    $c=new ControleRemoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
  </body>
</html>