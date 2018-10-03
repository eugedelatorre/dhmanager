<?php

include_once("autoload.php");

$AlumnoJose = new Alumno("Jose","Perez",222);

echo "<pre>";
var_dump($AlumnoJose);


$CursoA = new Curso("FullStack",234);

echo "<pre>";
var_dump($CursoA);


$Profesor1 = new Profesor("Pablo","Lopez");

echo "<pre>";
var_dump($Profesor1);

$Titular1 = new Titular("Matematica","Jose","Perez");

echo "<pre>";
var_dump($Titular1);
