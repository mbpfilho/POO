<!doctype html>
<html lang="en">
  <head>
    <title>aula 5 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "ContaBanco.php";
    $p1=new ContaBanco();//jubileu
    $p2=new ContaBanco();//creuza
    $p1->abrirConta("cc");
    $p1->setNumConta(1111);
    $p1->setDono("Jubileu");
    $p2->abrirConta("cp");
    $p2->setNumConta(2222);
    $p2->setDono("Creuza");

    $p1->depositar(300);
    $p2->depositar(500);

    $p2->sacar(100);

    $p1->pagarMensal();
    $p2->pagarMensal();

    $p1->sacar(338);
    $p2->sacar(530);

    $p1->fecharConta();
    $p2->fecharConta();

    print_r($p1);
    print_r($p2);
    ?>
    </pre>
  </body>
</html>