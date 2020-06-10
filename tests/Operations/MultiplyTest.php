<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Interfaces\CalculatorInterface;
use App\Operations\Multiply;
use PHPUnit\Framework\TestCase;

/**
 * Class MultiplyTest
 * @package Test\Operations
 */
class MultiplyTest extends TestCase
{
    public function testMultiplyClassImplementsCalculatorInterface(): void
    {
        self::assertInstanceOf(CalculatorInterface::class, new Multiply());
    }

    public function testOperationMethodReturnsValidValue(): void
    {
        self::assertEquals(8, (new Multiply())->getResult(4, 2));
    }
}
