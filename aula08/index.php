<!doctype html>
<html lang="en">
  <head>
    <title>aula 8 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";
    $l[0]=new Lutador("Pretty Boy","Franca",31,1.75,68.9,11,3,1);
    $l[1]=new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
    $l[2]=new Lutador("snapshadow","EUA",29,1.65,80.9,12,2,1);
    $l[3]=new Lutador("Dead Code","Australia",28,1.93,81.6,13,0,2);
    $l[4]=new Lutador("UFOCobol","Brasil",37,1.70,119.3,5,4,3);
    $l[5]=new Lutador("Nerdaart","EUA",30,1.81,105.7,12,2,4);
    
    $uec1=new Luta();
    $uec1->marcarLuta($l[4],$l[5]);
    $uec1->lutar();
    // $l[0]->status();
    // $l[1]->status();
    ?>
    </pre>
  </body>
</html>