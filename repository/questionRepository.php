<?php

class QuestionRepository
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
        $query = 'SELECT * FROM qcm';
        $result = $this->db->query($query);
        $questionDatas = $result->fetchAll();
        $questions = [];

        foreach ($questionDatas as $questionData) {
            $questions[] = new Qcm($questionData);
        }

        return $questions;
    }

}