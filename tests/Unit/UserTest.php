<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
// use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function return_name_charactor_count(){

        $user = User::factory()->create([
            'name' => 'John'
        ]);

        $result = $user->getNameCount();

        $this->assertEquals(4, $result);
        
    }

}
