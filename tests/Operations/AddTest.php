<?php

declare(strict_types=1);

namespace Test\Operations;

use App\Interfaces\CalculatorInterface;
use App\Operations\Add;
use PHPUnit\Framework\TestCase;

/**
 * Class AddTest
 * @package Test\Operations
 */
class AddTest extends TestCase
{
    public function testAddClassImplementsCalculatorInterface(): void
    {
        self::assertInstanceOf(CalculatorInterface::class, new Add());
    }

    public function testOperationMethodReturnsValidValue(): void
    {
        self::assertEquals(3, (new Add())->getResult(1, 2));
    }
}
