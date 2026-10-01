<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Nucleo\Conexion;
//voy a tratar de hacer un insert a la tabla clientes
try {
    //Aquí obtengo la conexion a la base de datos
    $pdo = Conexion::obtenerConexion();
    //ese :nombre es como en java ?nombre
    $sql = "INSERT INTO clientes(nombre) VALUES (:namee)";
    //preparo la consulta
    $stmt = $pdo->prepare($sql);
    //reemplazo el valor de :nombre, esto evita sql injection
    $stmt->execute(["namee" => "Ana García"]);
    echo "Cliente insertado correctamente";
} catch (PDOException $e) {
    echo "Error al insertar Cliente" . $e->getMessage();
}