<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Exceptions\InvalidOperationException;
use App\Operations\Add;
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
    private $operations;
    private $results;

    public function setUp(): void
    {
        $this->number1 = 10;
        $this->number2 = 2;
        $this->operations = ['+'];
        $this->results = [12];
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
        $calculator = new Calculator('test', $this->number1, $this->number2);
        $calculator->getCalculator();
    }

    /**
     * @throws InvalidOperationException
     */
    public function testGetValidResult(): void
    {
        foreach ($this->operations as $index => $operation) {
            $calculator = new Calculator($operation, $this->number1, $this->number2);
            $calculatorModule = $calculator->getCalculator();
            $result = $calculatorModule->getResult($this->number1, $this->number2);
            self::assertEquals($this->results[$index], $result);
        }
    }

    /**
     * @throws InvalidOperationException
     */
    public function testGetAddCalculator(): void
    {
        $calculator = new Calculator('+', $this->number1, $this->number2);
        $calculatorModule = $calculator->getCalculator();
        self::assertInstanceOf(Add::class, $calculatorModule);
    }
}
