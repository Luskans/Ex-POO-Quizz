<?php

require_once('utils/loadClass.php');
require_once('utils/db_connect.php');


$qcm = new QcmRepository($db);
$display = $qcm->getQcmByTheme('classic');
// echo '<pre>';
// print_r($display);
// echo '</pre>';

function generateQuizz(string $theme, PDO $db) {
    $qcmRepo = new QcmRepository($db);
    $qcm = $qcmRepo->getQcmByTheme($theme);

    echo '<h2> Quizz ' . $qcm->getTheme() . '</h2><br><br>';
    foreach($qcm->getQuestions() as $question) {
        echo '<p class="question">' . $question->getContent() . '</p><br><br>';
        foreach($question->getAnswers() as $answer) {
            $correct = $answer->getIsCorrect() ? " C'est la bonne réponse" : "";
            echo '<ul>';
                echo '<li>' . $answer->getContent() . '</li>';
                echo '<p class="correct">' . $correct . '<p><br>';
            echo '</ul>';
        }
        echo '<p class="explanation">' . $question->getExplanation() . '</p><br><br><br>';
    }
}
// generateQuizz('classic', $db);