<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($task, $getAnswerAndQuestion)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    line($task);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $getAnswerAndQuestion();
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}',");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
