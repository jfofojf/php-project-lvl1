<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function start(): void
{
    $generateGameData = function (): array {
        $firstDigit = rand(1, 30);
        $secondDigit = rand(1, 30);
        $question = "$firstDigit $secondDigit";
        $correctAnswer = gcd($firstDigit, $secondDigit);
        return [$question, $correctAnswer];
    };
    runGame(TASK, $generateGameData);
}
