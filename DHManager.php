<?php

class DHManager
{
  private $Alumno = [];
  private $Curso = [];
  private $Profesores = [];

public function altaCurso($nombre, $CodCurso, $CupoMax){

$curso1 = new Curso($nombre, $CodCurso, $CupoMax);
$this->Curso = $curso1;
}
public function altaProfesorAdjunto($Nombre, $Apellido, $CodProfesor, $CantHoras){
  $ProfeAdj = new Adjunto($Nombre, $Apellido, $CodProfesor, $CantHoras);
  $ProfeAdj-> setAntiguedad(0);
  $this-> $Profesores[]= $ProfeAdj;
}


}
