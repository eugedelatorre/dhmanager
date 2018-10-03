<?php


class Profesor
{
protected $Nombre;
protected $Apellido;
protected $Antiguedad;
protected $CodProf;


  public function __construct($Nombre, $Apellido)
  {
  $this-> Nombre = $Nombre;
  $this-> Apellido = $Apellido;

  }
  public function setNombre($Nombre){
    $this-> Nombre = $Nombre;
  }
    public function getNombre($Nombre){
      return $this->Nombre;
    }

    public function setApellido($Apellido){
      $this-> Apellido = $Apellido;
    }
    public function getApellido($Apellido){
      return $this->Apellido;
    }
    public function setAntiguedad($Antiguedad){
    $this-> Antiguedad = $Antiguedad;
      }
      public function getAntiguedad($Antiguedad){
        return $this->Antiguedad;
      }
      public function setCodProf($CodProf){
      $this-> CodProf = $CodProf;
        }
        public function getCodProf($CodProf){
          return $this->CodProf;
        }
}
