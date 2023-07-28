<?php

// require_once('utils/loadClass.php');
// require_once('utils/db_connect.php');
include_once('./controller/homepage.php');

///////////////// PARTIE 1

// $qcm = new Qcm();
// $question1 = new Question('POO signifie :');
// $question1->addAnswer(new Answer('Php Orienté Objet'));
// $question1->addAnswer(new Answer('Programmation Orientée Outil'));
// $question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
// $question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
// $question1->setExplanation('Sans commentaires si vous avez eu faux :-°');
// $qcm->addQuestion($question1);
// $qcm->displayQuestions();

///////////////// PARTIE 2
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <?php generateQuizz('classic', $db); ?>
    </main>
    
</body>
</html>




