<?php
//aplicacion para Realizar una aplicación para imprimir tu nombre, paterno y materno en 3 diferentes linea.
//creado por Luis Alejandro Jimenez Rincon 
//fecha:16/septiembre/2025 
//appweb2.php 
class imprimirNombre
{
    public $nombre = "Luis Alejandro"; 
    public $paterno = "Jimenez";
    public $materno = "Rincon";
    public function imprimir()
    {
        print "<h1>$this->nombre</h1>";
        print "<h1>$this->paterno</h1>";
        print "<h1>$this->materno</h1>";
    }
}
$persona = new imprimirNombre();
$persona->imprimir();