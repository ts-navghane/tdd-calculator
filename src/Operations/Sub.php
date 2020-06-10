<?php

declare(strict_types=1);

namespace App\Operations;

use App\Interfaces\CalculatorInterface;

/**
 * Class Sub
 * @package App\Operations
 */
class Sub implements CalculatorInterface
{
    /**
     * @param float $number1
     * @param float $number2
     * @return float
     */
    public function getResult(float $number1, float $number2): float
    {
        return $number1 - $number2;
    }
}
