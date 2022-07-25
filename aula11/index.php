<!doctype html>
<html lang="en">
  <head>
    <title>aula 11 POO</title>
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
    $v1=new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo("M");
    print_r($v1);

    $a1=new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(1111);
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();
    print_r($a1);

    $b1=new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administracäo");
    $b1->setIdade(17);
    $b1->pagarMensalidade();
    print_r($b1);
    ?>
    </pre>
  </body>
</html>