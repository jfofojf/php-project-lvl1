<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function start(): void
{
    $generateGameData = function (): array {
        $firstDigit = rand(1, 30);
        $secondDigit = rand(1, 30);
        $question = "$firstDigit $secondDigit";
        $correctAnswer = gmp_gcd($firstDigit, $secondDigit);
        return [$question, $correctAnswer];
    };
    runGame(TASK, $generateGameData);
}
