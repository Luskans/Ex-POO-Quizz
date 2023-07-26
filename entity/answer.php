<?php

class Answer
{
    private int $id;
    private string $content;
    private bool $isCorrect;
    const BONNE_REPONSE = true;
    const MAUVAISE_REPONSE = false;
    private int $id_question;

    public function __construct(string $content, bool $isCorrect = self::MAUVAISE_REPONSE)
    {
        $this->setContent($content);
        $this->setIsCorrect($isCorrect);
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

    // GET isCorrect
    public function getIsCorrect()
    {
        return $this->isCorrect;
    }

    // SET isCorrect
    public function setIsCorrect($isCorrect)
    {
        $this->isCorrect = $isCorrect;
        return $this;
    }

    // GET id_question
    public function getId_question()
    {
        return $this->id_question;
    }

    // SET id_question
    public function setId_question($id_question)
    {
        $this->id_question = $id_question;
        return $this;
    }


    // METHODS
    public function putCorrect($true)
    {
        $this->setIsCorrect($true);
    }

}