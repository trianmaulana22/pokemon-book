<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_api_request_is_successful(): void
    {
    // 期待される結果をアサート
    $this->assertNotNull($result);
    $this->assertArrayHasKey('game_indices', $result);
    }
}
