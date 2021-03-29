<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const TASK = "What is the result of the expression?";

const OPERATORS = ['+', '-', '*'];

function start()
{
    $generateGameData = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = calculate($num1, $num2, $operator);
        return [$question, $correctAnswer];
    };
    return runGame(TASK, $generateGameData);
}

function calculate($num1, $num2, $operator)
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
