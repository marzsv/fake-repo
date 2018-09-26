<?php

use PHPUnit\Framework\TestCase;

class FakeClassTest extends TestCase
{
    public function testDummie()
    {
        $this->assertTrue(true);
    }

    public function testFail()
    {
        $this->assertTrue(false);
    }
}
