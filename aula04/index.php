<!doctype html>
<html lang="en">
  <head>
    <title>aula 4 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "Caneta.php";
    $c1=new Caneta("BIC","Azul",.7);
    // $c1->setModelo("BIC");
    // $c1->setPonta(.7);
    // print "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";
    print_r($c1);
    ?>
    </pre>
  </body>
</html>