<?php

class Answer
{
    private int $id;
    private string $content;
    private bool $isCorrect;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
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

    
    // METHODS
    public function hydrate(array $datas)
    {
      if(isset($datas["id"])) {
        $this->setId($datas["id"]);
      }

      if(isset($datas["content"])) {
        $this->setContent($datas["content"]);
      }

      if(isset($datas["isCorrect"])) {
        $this->setIsCorrect($datas["isCorrect"]);
      }
    }


}