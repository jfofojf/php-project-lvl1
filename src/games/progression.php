<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const TASK = "What number is missing in the progression?";

function generateProgression(): array
{
    $step = rand(2, 10);
    $start = rand(1, 50);
    $arr = [];
    $arr[] = $start;

    for ($i = 0; $i < 9; $i++) {
        $start += $step;
        $arr[] = $start;
    }
    return $arr;
}

function arrToStr(array $arr, int $randHide): string
{
    $result = '';
    foreach ($arr as $key => $item) {
        if ($key === $randHide) {
            $result .= ".. ";
        } else {
            $result .= "$item ";
        }
    }
    return $result;
}

function start(): void
{
    $generateGameData = function (): array {
        $progression = generateProgression();
        $randHide = rand(0, 9);
        $correctAnswer = $progression[$randHide];
        $question = arrToStr($progression, $randHide);
        return [$question, $correctAnswer];
    };
    runGame(TASK, $generateGameData);
}
