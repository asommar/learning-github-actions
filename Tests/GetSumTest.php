<?php

namespace Actions\Tests;

use Actions\A;
use PHPUnit\Framework\TestCase;
use function Actions\getSum;


class GetSumTest extends TestCase
{
    public function testGetSum(): void
    {
        //new A();
       $this->assertEquals(4, getSum(2, 2));
    }
}
