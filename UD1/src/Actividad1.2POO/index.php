<?php
include_once "ejercicio_1.php";
include_once "ejercicio_2.php";//Clase Persona
include_once "ejercicio_3.php";//Clase Direccion
include_once "ejercicio_4.php";//Clase Estudiante
include_once "ejercicio_6.php";//Clase Profesor
include_once "ejercicio_7.php";

echo "<h1>Pruebas Actividades 1.2</h1>";

echo "<h2>1. Pruebas de Persona</h2>";

$persona1 = new Persona("Karim", 28);

echo "Nombre inicial: " . $persona1->getNombre() . "<br>";
echo "Edad inicial: " . $persona1->getEdad() . "<br>";
echo "¿Es mayor de edad?: " . ($persona1->esMayorEdad() ? "Sí" : "No") . "<br>";

$persona1->setNombre("Bruno")
         ->setEdad(2);

echo "<h2>2. Pruebas de Dirección (Composición)</h2>";

$dir = new Direccion("Calle Progreso", "Pontevadra", "12345");
var_dump($dir);
echo "<br>Dirección formateada: " . $dir->direccionCompleta() . "<br>";

echo "<h2>3. Pruebas de Estudiante (Herencia)</h2>";

$estudiante = new Estudiante("Ana", 22, "1 AuxEnf");
echo $estudiante->mostrarInformacion() . "<br>";
var_dump($estudiante);