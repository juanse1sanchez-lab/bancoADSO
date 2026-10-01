<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Nucleo\Conexion;

try {
    $pdo = Conexion::obtenerConexion();
    $sql = "INSERT INTO cuentas(numero_cuenta,saldo,cliente_id) VALUES (:num_cuenta,:saldo,:cliente_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["num_cuenta" => "1001", "saldo" => 500000, "cliente_id" => 5]);
    echo "Cuenta insertada exitosamente";
} catch (PDOException $e) {
    echo "Error al insertar Cuenta: " . $e->getMessage();
}