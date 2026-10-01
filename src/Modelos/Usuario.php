<?php
namespace App\Modelos;

class Usuario
{
    public function __construct(
        private int $id,
        private Cuenta $cuenta,
        private string $claveHash,
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
    public function getClaveHash(): string
    {
        return $this->claveHash;
    }

    public static function instanciarUsuario($dato): Usuario
    {
        return new Usuario(
            $dato['id'],
            new Cuenta(
                $dato['cuenta_id'],
                $dato['numero_cuenta'],
                $dato['saldo'],
                new Cliente(
                    $dato['cliente_id'],
                    $dato['nombre']
                )
            ),
            $dato['clave_hash']
        );
    }
}