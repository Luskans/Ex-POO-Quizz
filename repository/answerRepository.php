<?php

class AnswerRepository
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


    // METHODS
    public function getAnswersByIdQuestion($id_question): array
    {
        $request = $this->db->prepare(
            'SELECT * FROM answer 
            WHERE id_question = :id_question'
        );
        $request->execute([
            ':id_question' => $id_question
        ]);

        $answerDatas = $request->fetchAll();
        $answers = [];

        foreach ($answerDatas as $answerData) {
            $answers[] = new Answer($answerData);
        }

        return $answers;
    }
}