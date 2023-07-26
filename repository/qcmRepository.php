<?php

class QcmRepository
{
    private PDO $db;


    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }


    // GET db
    public function getDb()
    {
        return $this->db;
    }

    // SET db
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }


    public function getQuestions(): array
    {
        $query = 'SELECT * FROM question';
        $result = $this->db->query($query);
        $questionDatas = $result->fetchAll();
        // var_dump($questionDatas);
        $questions = [];

        foreach ($questionDatas as $questionData) {
            $questions[] = new Question($questionData['content']);
            var_dump($questions);
        }

        return $questions;
    }

}