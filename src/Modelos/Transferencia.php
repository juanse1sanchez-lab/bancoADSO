<?php

namespace App\Modelos;

use DateTime;

class Transferencia
{
    public function __construct(
        private int $id,
        private Cuenta $cuentaOrigen,
        private Cuenta $cuentaDestino,
        private float $valor,
        private DateTime $fecha
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCuentaOrigen(): Cuenta
    {
        return $this->cuentaOrigen;
    }

    public function getCuentaDestino(): Cuenta
    {
        return $this->cuentaDestino;
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