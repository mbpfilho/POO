<?php
abstract class Animal
{
    protected $peso,$idade,$membros;
    abstract public function emitirSom();
}
class Mamifero extends Animal{
    protected $corPelo;
    public function emitirSom(){
        echo "<p>Som de mamífero</p>";
    }
}
class Lobo extends Mamifero{
    function emitirSom(){
        echo "<p>Auuuuuuu!</p>";
    }
}
class Cachorro extends Lobo{
    function emitirSom(){
        echo "<p>Au! Au! Au!</p>";
    }
    function reagirFrase($frase){
        if ($frase=="Toma comida"||$frase=="Olá"){
            echo "<p>Abanar o rabo e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora){
        if($hora<12){
            echo "<p>Abanar</p>";
        }elseif($hora>=18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e latir</p>";
        }
    }
    function reagirDono($dono){
        if($dono){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e latir</p>";
        }
    }
    function reagirIdadePeso($idade,$peso){
        if($idade<5){
            if($peso<10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso<10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }
        }
    }
}