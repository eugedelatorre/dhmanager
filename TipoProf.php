<?php


class Titular extends Profesor
{
protected $Especialidad;

public function __construct($Nombre, $Apellido, $Especialidad)
  {
    parent::__construct($Nombre, $Apellido);
    $this-> Especialidad = $Especialidad;
  }

  public function setEspecialidad($Especialidad){
  $this-> Especialidad = $Especialidad;
    }
    public function getEspecialidad($Especialidad){
      return $this->Especialidad;
    }
}


class Adjunto extends Profesor
{
  protected $CantHoras;

  public function __construct($Nombre, $Apellido, $CantHoras)
  {
    parent::__construct($Nombre, $Apellido);
    $this-> CantHoras = $CantHoras;
  }
  public function setCantHoras($CantHoras){
  $this-> CantHoras = $CantHoras;
    }
    public function getCantHoras($CantHoras){
      return $this->CantHoras;
    }
}
