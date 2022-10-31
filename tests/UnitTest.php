<?php

class UnitTest extends \PHPUnit\Framework\TestCase {
    /**
     * A basic unit test example.
     * 
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSeeText('Hi from index');
    }

}