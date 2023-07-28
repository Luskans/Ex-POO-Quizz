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


    // METHOD
    public function getQcmByTheme($theme): Qcm
    {
        $request = $this->db->prepare(
            'SELECT * FROM qcm 
            WHERE theme = :theme'
        );
        $request->execute([
            ':theme' => $theme
        ]);
        
        $qcmDatas = $request->fetch();
        $qcm = new Qcm($qcmDatas, $this->getDb());

        return $qcm;
    }
}