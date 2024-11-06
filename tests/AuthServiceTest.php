<?php

use PHPUnit\Framework\TestCase;

require_once 'src/services/AuthService.php';

/**
 * Clase de prueba para AuthService.
 */
class AuthServiceTest extends TestCase {
    private AuthService $authService;

    protected function setUp(): void {
        $this->authService = new AuthService('secret_key');
    }

    /**
     * Prueba de creación de un token JWT válido.
     */
    public function testCreateToken(): void {
        $token = $this->authService->createToken(1);
        $this->assertIsString($token);
    }

    /**
     * Prueba de validación de un token JWT válido.
     */
    public function testValidateToken(): void {
        $token = $this->authService->createToken(1);
        $userId = $this->authService->validateToken($token);
        $this->assertEquals(1, $userId);
    }

    /**
     * Prueba de validación de un token JWT inválido.
     */
    public function testValidateInvalidToken(): void {
        $userId = $this->authService->validateToken('invalid_token');
        $this->assertNull($userId);
    }
}
