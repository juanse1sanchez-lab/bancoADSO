<?php

namespace App\Modelos;

class Cliente
{
    public function __construct(
        private int $id,
        private string $nombre
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public static function crearObjeto(array $datos): Cliente
    {
        return new Cliente(
            $datos['id'],
            $datos['nombre']
        );
    }
}

