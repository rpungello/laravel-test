<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Cache;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Cache::shouldReceive('get')->once()
            ->with('key')
            ->andReturn('value');
        $this->artisan('app:test-cache-command')->assertSuccessful();
    }
}
