<!doctype html>
<html lang="en">
  <head>
    <title>aula 13 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "Animal.php";
    $c1=new Mamifero();
    $c1->emitirSom();
    $c2=new Lobo();
    $c2->emitirSom();
    $c3=new Cachorro();
    $c3->emitirSom();

    $c3->reagirFrase("Olá");
    $c3->reagirFrase("Vai apanhar");
    $c3->reagirHora(11);
    $c3->reagirHora(21);
    $c3->reagirDono(true);
    $c3->reagirDono(false);
    $c3->reagirIdadePeso(2,12);
    $c3->reagirIdadePeso(17,4);
    ?>
    </pre>
  </body>
</html>