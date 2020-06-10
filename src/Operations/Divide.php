<?php

declare(strict_types=1);

namespace App\Operations;

use App\Exceptions\DivideByZeroException;
use App\Interfaces\CalculatorInterface;

/**
 * Class Divide
 * @package App\Operations
 */
class Divide implements CalculatorInterface
{
    /**
     * @param float $number1
     * @param float $number2
     * @return float
     * @throws DivideByZeroException
     */
    public function getResult(float $number1, float $number2): float
    {
        if ($number2 === 0.0) {
            throw new DivideByZeroException('Cannot divide by zero', 400);
        }

        return $number1 / $number2;
    }
}
