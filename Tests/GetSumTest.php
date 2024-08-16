<?php

namespace Actions\Tests;

use PHPUnit\Framework\TestCase;
use function Actions\getSum;


class GetSumTest extends TestCase
{
    public function testGetSum(): void
    {
       $this->assertEquals(4, getSum(2, 2));
    }
}
