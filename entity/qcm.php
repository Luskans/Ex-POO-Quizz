<?php

class Qcm
{
    private int $id;
    private array $questions;

    
    // GET id
    public function getId()
    {
        return $this->id;
    }

    // GETTER questions
    public function getQuestions(): array
    {
        return $this->questions;
    }

    // SETTER questions
    public function setQuestions($questions): self
    {
        $this->questions[] = $questions;
        return $this;
    }


    // METHODS

    public function displayQuestions()
    {
        foreach($this->getQuestions() as $question) {
            echo($question->getContent() . '<br>');
            foreach($question->getAnswers() as $answer) {
                echo($answer->getContent()) ;
                $correct = $answer->getIsCorrect() ? " C'est la bonne réponse" : "";
                echo($correct). '<br>';
            }
            echo($question->getExplanation());
        }
    }

    public function addQuestion(Question $objectQuestion)
    {
        $this->setQuestions($objectQuestion);
    }
}