<?php

class Qcm
{
    private int $id;
    private array $questions;
    private string $theme;
    private QuestionRepository $questionRepository;

    public function __construct(array $datas, PDO $db)
    {
        $this->hydrate($datas);
        $this->createQuestionRepository($db);
        $this->setQuestions($this->getQuestionRepository()->getQuestionsByIdQcm($this->id));
        
    }

    
    // GET id
    public function getId()
    {
        return $this->id;
    }

    // SETTER id
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    // GETTER questions
    public function getQuestions(): array
    {
        return $this->questions;
    }

    // SETTER questions
    public function setQuestions($questions): self
    {
        $this->questions = $questions;
        return $this;
    }

    // GETTER theme 
    public function getTheme()
    {
        return $this->theme;
    }

    // SETTER theme 
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    // GET questionRepo
    public function getQuestionRepository()
    {
        return $this->questionRepository;
    }

    // SET questionRepo
    public function setQuestionRepository($questionRepository)
    {
        $this->questionRepository = $questionRepository;
        return $this;
    }


    // METHODS
    private function hydrate(array $datas)
    {
        if (isset($datas["id"])) {
            $this->setId($datas["id"]);
        }

        if (isset($datas["question"])) {
            $this->setQuestions($datas["questions"]);
        }

        if (isset($datas["theme"])) {
            $this->setTheme($datas["theme"]);
        }
    }

    public function createQuestionRepository(PDO $db)
    {
        $this->questionRepository = new QuestionRepository($db);
        return $this;
    }

    // public function displayQuestions()
    // {
    //     foreach($this->getQuestions() as $question) {
    //         echo($question->getContent() . '<br>');
    //         foreach($question->getAnswers() as $answer) {
    //             echo($answer->getContent()) ;
    //             $correct = $answer->getIsCorrect() ? " C'est la bonne réponse" : "";
    //             echo($correct). '<br>';
    //         }
    //         echo($question->getExplanation());
    //     }
    // }

}