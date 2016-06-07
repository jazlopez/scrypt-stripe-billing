<?php

use App\User;
use Illuminate\Http\Response;
use Laravel\Lumen\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * Root route
     *
     * @return void
     */
    public function testRootRoute()
    {
        $this->get('/');

        $this->assertResponseStatus(Response::HTTP_PERMANENTLY_REDIRECT);
    }

    /**
     * Create user route
     *
     * @return void
     */
    public function testCreateUserRoute()
    {
        $response = new ReflectionClass($this->post('/user/')->response->original);

        $this->assertEquals(User::class, $response->getName());
    }


}
