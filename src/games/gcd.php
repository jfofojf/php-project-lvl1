<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function start()
{
    $generateGameData = function () {
        $firtsDigit = rand(1, 30);
        $secondDigit = rand(1, 30);
        $question = "$firtsDigit $secondDigit";
        $correctAnsewer = gcd($firtsDigit, $secondDigit);
        return [$question, $correctAnsewer];
    };
    return runGame(TASK, $generateGameData);
}
