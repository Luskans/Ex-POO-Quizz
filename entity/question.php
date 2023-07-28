<?php

class Question
{
    private int $id;
    private string $content;
    private string $explanation;
    private array $answers;
    private AnswerRepository $answerRepository;

    public function __construct(array $datas, PDO $db)
    {
        $this->hydrate($datas);
        $this->setAnswerRepository(($db));
        $this->setAnswers($this->getAnswerRepository()->getAnswersByIdQuestion($this->id));
    }


    // GET id
    public function getId()
    {
        return $this->id;
    }
    
    // SET id
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    // GET content
    public function getContent()
    {
        return $this->content;
    }

    // SET content
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    // GET answers
    public function getAnswers()
    {
        return $this->answers;
    }

    // SET answers
    public function setAnswers($answers)
    {
        $this->answers = $answers;
        return $this;
    }

    // GET explanation
    public function getExplanation()
    {
        return $this->explanation;
    }

    // SET explanation
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
        return $this;
    }

    // GET answerRepo
    public function getAnswerRepository()
    {
        return $this->answerRepository;
    }

    // SET answerRepo 
    public function setAnswerRepository(PDO $db)
    {
        $this->answerRepository = new AnswerRepository($db);
        return $this;
    }


    // METHODS
    public function hydrate(array $datas)
    {
        if (isset($datas["id"])) {
            $this->setId($datas["id"]);
        }

        if (isset($datas["content"])) {
            $this->setContent($datas["content"]);
        }

        if (isset($datas["explanation"])) {
            $this->setExplanation($datas["explanation"]);
        }
    }
}
