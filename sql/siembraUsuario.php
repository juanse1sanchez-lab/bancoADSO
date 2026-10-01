<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Nucleo\Conexion;

try {
    $pdo = Conexion::obtenerConexion();
    $sql = "INSERT INTO usuarios(cuenta_id,clave_hash) VALUES (:cuenta_id,:clave_hash)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["cuenta_id" => 10, "clave_hash" => password_hash("123", PASSWORD_DEFAULT)]);
    echo "Usuario insertado exitosamente";

} catch (PDOException $e) {
    echo "Error al insertar Cuenta: " . $e->getMessage();
}