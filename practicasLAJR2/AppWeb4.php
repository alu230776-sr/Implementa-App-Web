<?php
//aplicacion para mostrar una lista de 5 amigos/amigas
//creado por Luis Alejandro Jimenez Rincon 
//fecha:16/septiembre/2025 
//appweb4.php 
class amigos
{
    public $titulo = "Mis 5 mejores amigos son:";
    public $amigo1 = "1. Axel Guillermo";
    public $amigo2 = "2. Guillermo Palacios";
    public $amigo3 = "3. Oliver Espizona";
    public $amigo4 = "4. Diego Andrade";
    public $amigo5 = "5. Alan Alexis";

    public function imprimir()
    {
        print "<h1>$this->titulo</h1>";
        print "<h1>$this->amigo1</h1>";
        print "<h1>$this->amigo2</h1>";
        print "<h1>$this->amigo3</h1>";
        print "<h1>$this->amigo4</h1>";
        print "<h1>$this->amigo5</h1>";
    }
}
$persona = new amigos();
$persona->imprimir();