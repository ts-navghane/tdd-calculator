<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Interfaces\CalculatorInterface;
use App\Operations\Sub;
use PHPUnit\Framework\TestCase;

/**
 * Class SubTest
 * @package Test\Operations
 */
class SubTest extends TestCase
{
    public function testSubClassImplementsCalculatorInterface(): void
    {
        self::assertInstanceOf(CalculatorInterface::class, new Sub());
    }

    public function testOperationMethodReturnsValidValue(): void
    {
        self::assertEquals(2, (new Sub)->getResult(4, 2));
    }
}
