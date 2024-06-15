<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testItWorks(): void
    {
        $this->assertSame('42', '42');
    }

    public function testItWorksTheOtherWay(): void
    {
        $this->assertEquals(1, 1);
    }
}