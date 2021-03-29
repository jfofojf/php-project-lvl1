<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
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
