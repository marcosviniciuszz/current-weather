<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    /**
     * Testa se a conexão com o banco está funcionando.
     *
     * @return void
     */
    public function test_database_connection()
    {
        try {
            DB::connection()->getPdo();
            $this->assertTrue(true);
        } catch (\Exception $e) {
            $this->fail("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
}
