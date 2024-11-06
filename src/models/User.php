<?php

/**
 * Clase User que representa un usuario del sistema.
 */
class User {
    private string $username;
    private string $password;

    /**
     * Constructor de User.
     *
     * @param string $username Nombre de usuario.
     * @param string $password Contraseña del usuario.
     */
    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Verifica si la contraseña es correcta.
     *
     * @param string $password Contraseña a verificar.
     * @return bool
     */
    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->password);
    }
}
