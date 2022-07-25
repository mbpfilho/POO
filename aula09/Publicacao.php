<?php
interface Publicacao{
    //métodos
    function abrir();
    function fechar();
    function folhear($p);
    function avancarPag();
    function voltarPag();
}