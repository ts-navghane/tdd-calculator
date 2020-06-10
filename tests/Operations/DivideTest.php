<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Exceptions\DivideByZeroException;
use App\Interfaces\CalculatorInterface;
use App\Operations\Divide;
use PHPUnit\Framework\TestCase;

/**
 * Class DivideTest
 * @package Test\Operations
 */
class DivideTest extends TestCase
{
    public function testDivideClassImplementsCalculatorInterface(): void
    {
        self::assertInstanceOf(CalculatorInterface::class, new Divide());
    }

    /**
     * @throws DivideByZeroException
     */
    public function testOperationMethodThrowsDivideByZeroException(): void
    {
        $this->expectException(DivideByZeroException::class);
        (new Divide())->getResult(1, 0);
    }

    /**
     * @throws DivideByZeroException
     */
    public function testOperationMethodReturnsValidValue(): void
    {
        self::assertEquals(2, (new Divide())->getResult(4, 2));
    }
}
