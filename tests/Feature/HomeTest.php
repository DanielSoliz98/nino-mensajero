<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * Http test from home
     *
     * @return void
     */
    public function testRouteHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
