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


    // METHODS
    public function getQuestionsByIdQcm($id_qcm): array
    {
        $request = $this->db->prepare(
            'SELECT * FROM question 
            WHERE id_qcm = :id_qcm'
        );
        $request->execute([
            ':id_qcm' => $id_qcm
        ]);
        
        $questionDatas = $request->fetchAll();
        $questions = [];

        foreach ($questionDatas as $questionData) {
            $questions[] = new Question($questionData, $this->getDb());
        }

        return $questions;
    }
}