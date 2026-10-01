<?php

namespace App\Modelos;

class Cuenta
{
    public function __construct(
        private int $id,
        private string $numCuenta,
        private float $saldo,
        private Cliente $cliente
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNumCuenta(): string
    {
        return $this->numCuenta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public static function desdeDatos($dato): Cuenta
    {
        return new Cuenta(
            $dato['id'],
            $dato['numero_cuenta'],
            $dato['saldo'],
            new Cliente(
                $dato['cliente_id'],
                $dato['nombre']
            )
        );
    }

}