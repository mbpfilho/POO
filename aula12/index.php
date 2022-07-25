<!doctype html>
<html lang="en">
  <head>
    <title>aula 12 POO</title>
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
    $m=new Mamifero();
    $r=new Reptil();
    $p=new Peixe();
    $a=new Ave();

    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();
    echo "<br>";
    $m->setPeso(85.3);
    $r->setIdade(2);
    $r->setMembros(4);
    $r->locomover();
    $r->alimentar();
    $r->emitirSom();
    echo "<br>";
    $p->setPeso(.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->locomover();
    $p->alimentar();
    $p->emitirSom();
    $p->soltarBolha();
    echo "<br>";
    $a->setPeso(.89);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->locomover();
    $a->alimentar();
    $a->emitirSom();
    $a->fazerNinho();
    echo "<br>";
    $k=new Canguru();
    $c=new Cachorro();
    $t=new Tartaruga();

    $m->setPeso(5.70);
    $m->setIdade(8);
    $m->setMembros(4);
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();
    echo "<br>";
    $k->setPeso(55.30);
    $k->setIdade(3);
    $k->setMembros(4);
    $k->locomover();
    $k->alimentar();
    $k->emitirSom();
    $k->usarBolsa();
    echo "<br>";
    $c->setPeso(3.94);
    $c->setIdade(5);
    $c->setMembros(4);
    $c->locomover();
    $c->alimentar();
    $c->emitirSom();
    $c->abanarRabo();
    echo "<br>";
    $t->setPeso(3.94);
    $t->setIdade(50);
    $t->setMembros(4);
    $t->locomover();
    $t->alimentar();
    $t->emitirSom();
    ?>
    </pre>
  </body>
</html>