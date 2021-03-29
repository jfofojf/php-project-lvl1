<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    $prime = true;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $prime = false;
        }
    }
    return $prime;
}

function start()
{
    $generateGameData = function () {
        $question = rand(2, 100);
        $correstAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correstAnswer];
    };
    return runGame(TASK, $generateGameData);
}
