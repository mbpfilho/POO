<!doctype html>
<html lang="en">
  <head>
    <title>aula02 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <div>
    <?php
    require_once "Caneta.php";
    $c1=new Caneta;
    $c1->cor="Azul";
    $c1->ponta=.5;
    $c1->tampada=false;
    $c1->tampar();
    $c1->rabiscar();
    print_r($c1);
    echo "<br>";

    $c2=new Caneta;
    $c2->cor="Verde";
    $c2->carga=50;
    $c2->tampar();
    print_r($c2);
    ?>
    </div>
  </body>
</html>