<?php
require_once '../models/User.php';
require_once '../services/JWTService.php';

/**
 * Controlador para la autenticación de usuarios.
 */
class AuthController {
    private JWTService $jwtService;

    public function __construct() {
        $config = include '../config/config.php';
        $this->jwtService = new JWTService($config['jwt_secret']);
    }

    /**
     * Inicia sesión y devuelve un token JWT si las credenciales son válidas.
     *
     * @param string $username Nombre de usuario.
     * @param string $password Contraseña del usuario.
     * @return string JSON con el token JWT o un mensaje de error.
     */
    public function login(string $username, string $password): string {
        $user = new User($username, $password);
        if ($user->verifyPassword($password)) {
            return json_encode(['token' => $this->jwtService->createToken($username)]);
        } else {
            return json_encode(['error' => 'Invalid credentials']);
        }
    }
}
