<?php

declare(strict_types=1);

namespace App;

use App\Operations\Calculator;
use Exception;
use InvalidArgumentException;

require __DIR__ . '/../vendor/autoload.php';

try {
    if (4 !== $argc) {
        throw new InvalidArgumentException('Invalid number of arguments', 400);
    }

    unset($argv[0]);
    $argv = array_values($argv);
    [$number1, $number2, $operation] = $argv;

    $calculator = new Calculator($operation, $number1, $number2);
    $operand = $calculator->getCalculator();
    $result = $calculator->getResult($operand);

    echo "$number1 $operation $number2 = $result" . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
