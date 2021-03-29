<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const TASK = "What is the result of the expression?";

const OPERATORS = ['+', '-', '*'];

function start(): void
{
    $generateGameData = function (): array {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = calculate($num1, $num2, $operator);
        return [$question, $correctAnswer];
    };
    runGame(TASK, $generateGameData);
}

function calculate(int $num1, int $num2, string $operator): int
{
    switch ($operator) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
    }
    return $correctAnswer;
}
