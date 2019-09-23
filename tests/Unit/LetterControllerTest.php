<?php

namespace Tests\Unit;

use App\Http\Controllers\LetterController;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Validation\ValidationException;


class LetterControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreLetter()
    {
        $request = Request::create('/writeLetter', 'POST',[
            'content'=>'Content of letter'
        ]);
        $controller = new LetterController();
        $response = $controller->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
}
