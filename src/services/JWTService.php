<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;

/**
 * Servicio para manejar la creación y validación de tokens JWT.
 */
class JWTService {
    private string $secret;

    /**
     * Constructor de JWTService.
     *
     * @param string $secret Clave secreta para firmar los tokens.
     */
    public function __construct(string $secret) {
        $this->secret = $secret;
    }

    /**
     * Genera un token JWT.
     *
     * @param string $data Información del usuario para incluir en el token.
     * @return string Token JWT generado.
     */
    public function createToken(string $data): string {
        $payload = [
            'sub' => $data,
            'exp' => time() + 3600,
        ];
        return JWT::encode($payload, $this->secret, 'HS256');
    }

    /**
     * Valida un token JWT.
     *
     * @param string $token Token a validar.
     * @return mixed Retorna los datos del token si es válido, null si no lo es.
     */
    public function validateToken(string $token): mixed {
        try {
            return JWT::decode($token, $this->secret, ['HS256']);
        } catch (Exception $e) {
            return null;
        }
    }
}
