<?php

class Curso
{
  private $Nombre;
  private $CodCurso;
  private $Titular;
  private $Adjunto;
  private $CupoMax = 40;
  private $Alumnos = [];

  public function __construct(string $Nombre, int $CodCurso)
  {
    $this-> Nombre = $Nombre;
    $this-> CodCurso = $CodCurso;
  }
  public function setNombre(string $Nombre){
    $this-> Nombre = $Nombre;
  }
    public function getNombre($Nombre){
      return $this->Nombre;

}
public function setCodCurso(int $CodCurso){
$this-> CodAlumno = $CodAlumno;
  }
  public function getCodCurso($CodCurso){
    return $this->CodCurso;
      }
      public function setTitular(Titular $Titular){
      $this-> Titular = $Titular;
        }
public function getTitular($Titular){
          return $this->Titular;
        }
public function setAdjunto(Titular $Adjunto){
        $this-> Adjunto = $Adjunto;
          }
public function getAdjunto($Adjunto){
            return $this->Adjunto;
          }

public function siAgregarAlumno(){
  if ((count($Alumnos))<=$CupoMax) {
    return true;
  } else{
  return false;
}
public function AgregarAlumno(Alumno $Alumnos){
 if ($this->siAgregarAlumno())  {
    $this-> Alumnos[] = $Alumnos;
  } else {
return "Asignar a otro curso";
}

public function listarAlumno(){
    return $this->Alumnos;
  }

public function listarProfes(){
return $this->Titular;
return $this->Adjunto;
}

}
