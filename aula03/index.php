<!doctype html>
<html lang="en">
  <head>
    <title>aula 3 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
        <div>
        <?php
        require_once "Caneta.php";
        $c1=new Caneta;
        $c1->modelo="BIC cristal";
        $c1->cor="Azul";
        // $c1->ponta=.5;
        // $c1->carga=99;
        // $c1->tampada=true;
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
        ?>
        </div>
    </pre>
  </body>
</html>