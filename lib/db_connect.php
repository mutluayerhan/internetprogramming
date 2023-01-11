<?php

class Surucu
{
    private function getDbConf()
    {
        return array("mysql:host=localhost;dbname=surucu_kurs", "root", "");
    }

    public function getOyuncularByTakimId($alanid = 0)
    {
        if ($alanid) {
            $dbCongArr = $this->getDbConf();
            try {
                $db = new PDO($dbCongArr[0], $dbCongArr[1], $dbCongArr[2]);
            } catch (PDOException $e) {
                return false;
            }
            $query = $db->prepare("SELECT * FROM hizmetlerimiz    JOIN sinava_giren_kisiler ON hizmetlerimiz.alan_id = sinava_giren_kisiler.alan_id   WHERE sinava_giren_kisiler.alan_id = :alanid");
            $result = $query->execute([":alanid"=>$alanid]);
            $kisiler = $query->fetchAll(PDO::FETCH_ASSOC);
            return $kisiler;
        }
    }






}
