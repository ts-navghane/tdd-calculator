<?php

declare(strict_types=1);

namespace App\Interfaces;

/**
 * Interface CalculatorInterface
 * @package App\Interfaces
 */
interface CalculatorInterface
{
    /**
     * @param float $number1
     * @param float $number2
     * @return float
     */
    public function getResult(float $number1, float $number2): float;
}
