<!doctype html>
<html lang="en">
  <head>
    <title>aula 9 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "Pessoa.php";
    require_once "Livro.php";

    $p[0]=new Pessoa("Pedro",22,"M");
    $p[1]=new Pessoa("Maria",31,"F");

    $l[0]=new Livro("PHP","José da Silva",300,$p[0]);
    $l[1]=new Livro("POO","Maria de Souza",500,$p[0]);
    $l[2]=new Livro("POO PHP","Ana Paula",800,$p[1]);

    $l[0]->abrir();
    $l[0]->folhear(100);
    $l[0]->voltarPag();
    $l[0]->detalhes();

    $l[1]->detalhes();

    $l[2]->detalhes();
    ?>
    </pre>
  </body>
</html>