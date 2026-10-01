# Banco ADSO - Taller Práctico

Aplicación bancaria simulada desarrollada con Arquitectura MVC artesanal, Programación Orientada a Objetos y persistencia en MySQL. 



## Stack Tecnológico

*   **Lenguaje:** PHP >= 8.1
*   **Arquitectura:** MVC Artesanal 
*   **Gestor de Dependencias:** Composer (Autoload PSR-4)
*   **Base de Datos:** MySQL 
*   **Acceso a Datos:** PDO con consultas preparadas 
*   **Seguridad:** Encriptación de contraseñas con `password_hash()`

## Requisitos Previos

*   PHP 8.1 o superior.
*   Composer instalado.
*   Servidor MySQL (XAMPP, Laragon, o independiente).

## Instalación y Configuración

1. **Clonar o descargar el proyecto** en tu entorno local.
2. **Generar el Autoload:** Abre una terminal en la raíz del proyecto y ejecuta:
   ```bash
   composer dump-autoload