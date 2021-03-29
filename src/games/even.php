<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $digit): bool
{
    return $digit % 2 === 0 ? true : false;
}

function start(): mixed
{
    $generateGameData = function (): array {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    runGame(TASK, $generateGameData);
}
