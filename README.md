# Proyecto 1: Autenticación JWT

## Descripción:
  Este proyecto implementa un sistema de autenticación utilizando JWT (JSON Web Tokens) en PHP. Se puede utilizar para proteger rutas de una aplicación y validar los usuarios mediante tokens seguros.

## Tecnologías Usadas:
  - PHP 8.0+
  - firebase/php-jwt: Librería para manejar los tokens JWT.
  - PHPUnit: Framework de pruebas unitarias.

## Requisitos:
  - PHP 8.0 o superior.
  - Composer (para gestionar dependencias).

## Instalación:
  1. Clona el repositorio:

     ```bash
     git clone https://github.com/lucasaacosta1995/php-autenticacion-jwt.git
     cd php-autenticacion-jwt
     ```

  2. Instala las dependencias con Composer:

     ```bash
     composer install
     ```

  3. Configura tu servidor web para apuntar a la carpeta `public`.

## Estructura del Proyecto:

```bash
.
├── src/
│   ├── Auth/
│   │   └── JWTAuth.php
│   └── Middleware/
│       └── AuthMiddleware.php
├── tests/
│   └── JWTAuthTest.php
├── public/
│   └── index.php
└── config/
    └── config.php
```

## Descripción de Directorios y Archivos:
    - /src: Contiene las clases que implementan la lógica de autenticación.
    - /tests: Contiene las pruebas unitarias para validar la creación y validación de tokens.
    - /public: Punto de entrada de la aplicación para pruebas de autenticación (ejemplo en index.php).
    - /config: Contiene el archivo de configuración de la clave secreta de JWT.

## Funcionalidades:
    - Generación de tokens JWT.
    - Validación de tokens.
    - Ejemplo de middleware para proteger rutas.

## Configuración:
    - Configura tu entorno:
        - Modifica el archivo config/config.php con una clave secreta para JWT.
    - Base de datos:
        - Este proyecto no necesita base de datos, solo se enfoca en la autenticación con JWT.



## Ejecución de Pruebas:
```bash
./vendor/bin/phpunit --testdox
```