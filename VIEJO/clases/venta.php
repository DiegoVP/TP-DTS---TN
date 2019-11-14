<?php
class Venta{
  private $relojes = [];
  private $fechaCompra;
  private $tipoUsuario;
  private $total;
  private $descuento;
  private $metodoPago;

    public function getRelojes()
    {
        return $this->relojes;
    }

    public function setRelojes($relojes)
    {
        $this->relojes = $relojes;

        return $this;
    }

    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    public function getDescuento()
    {
        return $this->descuento;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }

}


 ?>
