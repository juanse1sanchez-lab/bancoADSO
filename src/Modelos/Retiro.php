<?php

namespace App\Modelos;

use DateTime;

class Retiro
{
    public function __construct(
        private int $id,
        private Cuenta $cuenta,
        private float $valor,
        private DateTime $fecha,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCuenta(): Cuenta
    {
        return $this->cuenta;
    }
    public function getValor(): float
    {
        return $this->valor;
    }

    public function getFecha(): DateTime
    {
        return $this->fecha;
    }
}