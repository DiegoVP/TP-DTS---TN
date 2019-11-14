<?php
class Direccion{
  private $provincia;
  private $barrio;
  private $codigoPostal;
  private $calle;
  private $numero;
  private $piso;
  private $localidad;
  private $departamento;
  private $entreCalles;
  private $telContacto;
  private $telSecundario;
  private $infoAdicional;
  private $estado;

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getBarrio()
    {
        return $this->barrio;
    }

    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPiso()
    {
        return $this->piso;
    }

    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getEntreCalles()
    {
        return $this->entreCalles;
    }

    public function setEntreCalles($entreCalles)
    {
        $this->entreCalles = $entreCalles;

        return $this;
    }

    public function getTelContacto()
    {
        return $this->telContacto;
    }

    public function setTelContacto($telContacto)
    {
        $this->telContacto = $telContacto;

        return $this;
    }

    public function getTelSecundario()
    {
        return $this->telSecundario;
    }

    public function setTelSecundario($telSecundario)
    {
        $this->telSecundario = $telSecundario;

        return $this;
    }

    public function getInfoAdicional()
    {
        return $this->infoAdicional;
    }

    public function setInfoAdicional($infoAdicional)
    {
        $this->infoAdicional = $infoAdicional;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    // funciones especiales

}
 ?>
