<?php

class Question
{
    private int $id;
    private string $content;
    private array $answers;
    private string $explanation;
    private int $id_qcm;

    public function __construct(string $content)
    {
        $this->setContent($content);
    }


    // GET id
    public function getId()
    {
        return $this->id;
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
        $this->answers[] = $answers;
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

    // GET id_qcm
    public function getId_qcm()
    {
        return $this->id_qcm;
    }

    // SET id_qcm
    public function setId_qcm($id_qcm)
    {
        $this->id_qcm = $id_qcm;
        return $this;
    }


    // METHODS
    public function addAnswer(Answer $objectAnswer)
    {
        $this->setAnswers($objectAnswer);
    }
    

    
}