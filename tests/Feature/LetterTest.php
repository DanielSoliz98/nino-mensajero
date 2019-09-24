<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LetterTest extends TestCase
{
    /**
     * Http test from writeLetter
     *
     * @return void
     */
    public function testRouteLetter()
    {
        $response = $this->get('/writeLetter');
        $response->assertStatus(200);
    }

    public function testPostLetterTemporaryRedirection()
    {
        $response = $this->json('POST', '/writeLetter', ['content' => 'Content of Letter']);

        $response
            ->assertStatus(302);
    }
}
