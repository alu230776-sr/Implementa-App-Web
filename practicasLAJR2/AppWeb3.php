<?php
//aplicacion para mostrar 10 habilidades adquiridas en programación
//creado por Luis Alejandro Jimenez Rincon 
//fecha:16/septiembre/2025 
//appweb3.php 
class habilidades
{
    public $titulo = "Las 10 habilidades en programación adquiridas:";
    public $habilidad1 = "1. Programación en PHP";
    public $habilidad2 = "2. Desarrollo web con HTML/CSS";
    public $habilidad3 = "3. Uso de bases de datos MySQL";
    public $habilidad4 = "4. Control de versiones con Git";
    public $habilidad5 = "5. Desarrollo de aplicaciones con JavaScript";
    public $habilidad6 = "6. Manejo de frameworks como Laravel";
    public $habilidad7 = "7. Diseño responsivo";
    public $habilidad8 = "8. Optimización de rendimiento web";
    public $habilidad9 = "9. Seguridad en aplicaciones web";
    public $habilidad10 = "10. Trabajo en equipo y metodologías ágiles";

    public function imprimir()
    {
        print "<h1>$this->titulo</h1>";
        print "<h1>$this->habilidad1</h1>";
        print "<h1>$this->habilidad2</h1>";
        print "<h1>$this->habilidad3</h1>";
        print "<h1>$this->habilidad4</h1>";
        print "<h1>$this->habilidad5</h1>";
        print "<h1>$this->habilidad6</h1>";
        print "<h1>$this->habilidad7</h1>";
        print "<h1>$this->habilidad8</h1>";
        print "<h1>$this->habilidad9</h1>";
        print "<h1>$this->habilidad10</h1>";
    }
}

$persona = new habilidades();
$persona->imprimir();