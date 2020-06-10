<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Exceptions\InvalidOperationException;
use App\Operations\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 * @package Test\Operations
 */
class CalculatorTest extends TestCase
{
    private $number1;
    private $number2;

    public function setUp(): void
    {
        $this->number1 = 10;
        $this->number2 = 2;
    }

    public function tearDown(): void
    {
        $this->number1 = $this->number2 = null;
    }

    public function testGetCalculatorThrowsException(): void
    {
        $this->expectException(InvalidOperationException::class);
        $this->expectExceptionMessage('Invalid operation');
        $this->expectExceptionCode(400);
        $calculator = new Calculator($this->number1, $this->number2);
        $calculator->getCalculator();
    }
}
