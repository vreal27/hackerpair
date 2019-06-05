<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testSomeValueIsFalse()
    {
    	$this->assertFalse(false);
    }

    // assertEquals checks if the a particular return value matches expectations

    public function testUserFullName()
    {
    	$fullName = "Eddie Villareal";
    	$this->assertEquals("Eddie Villareal", $fullName);
    }

    // assertCount confirms number of items in an array 

    public function testUserHasFavoritedFiveEvents()
    {
    	$favorites = [45, 12, 676, 88, 15];
    	$this->assertCount(5, $favorites);
    }
}
