<!doctype html>
<html lang="en">
  <head>
    <title>aula 10 POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="../poo.css">
  </head>
  <body>
    <pre>
    <?php
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";

    $p1=new Pessoa();
    $p2=new Aluno();
    $p3=new Professor();
    $p4=new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");

    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    $p1->setSexo("M");
    $p4->setSexo("F");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

    ?>
    </pre>
  </body>
</html>