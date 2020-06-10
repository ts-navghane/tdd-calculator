<?php

declare(strict_types=1);

namespace App\Operations;

use App\Exceptions\InvalidOperationException;
use App\Interfaces\CalculatorInterface;

/**
 * Class Calculator
 * @package App\Operations
 */
class Calculator
{
    private $operation;
    private $number1;
    private $number2;

    /**
     * Calculator constructor.
     * @param $operation
     * @param $number1
     * @param $number2
     */
    public function __construct($operation, $number1, $number2)
    {
        $this->operation = (string)$operation;
        $this->number1 = (float)$number1;
        $this->number2 = (float)$number2;
    }

    /**
     * @return CalculatorInterface
     * @throws InvalidOperationException
     */
    public function getCalculator(): CalculatorInterface
    {
        if ($this->operation === '+') {
            return new Add();
        }

        throw new InvalidOperationException('Invalid operation', 400);
    }

    /**
     * @param CalculatorInterface $operand
     * @return float
     */
    public function getResult(CalculatorInterface $operand): float
    {
        return $operand->getResult($this->number1, $this->number2);
    }
}
