
<?php

class Alumno
{
  private $Nombre;
  private $Apellido;
  private $CodAlumno;

  public function __construct(string $Nombre, string $Apellido, int $CodAlumno)
  {
    $this-> Nombre = $Nombre;
    $this-> Apellido = $Apellido;
    $this-> CodAlumno = $CodAlumno;
  }
public function setNombre(string $Nombre){
  $this-> Nombre = $Nombre;
}
  public function getNombre($Nombre){
    return $this->Nombre;
  }

  public function setApellido(string $Apellido){
    $this-> Apellido = $Apellido;
  }
  public function getApellido($Apellido){
    return $this->Apellido;
  }
  public function setCodAlumno(int $codAlumno){
  $this-> CodAlumno = $CodAlumno;
    }
    public function getCodAlumno(int $CodAlumno){
      return $this->CodAlumno;
    }

  }

  
