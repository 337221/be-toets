<?php

class ExaminatorModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllExaminatorsWithExams() {
        $query = "
        SELECT 
        e.Voornaam, e.Tussenvoegsel, e.Achternaam,
        ex.Datum as DatumExamen, ex.Rijbewijscategorie, ex.Rijschool, ex.Stad, ex.Uitslag as UitslagExamen
        FROM Examinator e
        JOIN ExamenPerExaminator ee ON e.Id = ee.ExaminatorId
        JOIN Examen ex ON ee.ExamenId = ex.Id";
    
        $this->db->query($query);
        return $this->db->resultSet();
    }
    
    
    public function getExaminatorById($examinatorId) {
        $query = "
        SELECT 
        e.Voornaam, e.Tussenvoegsel, e.Achternaam,
        ex.Datum as DatumExamen, ex.Rijbewijscategorie, ex.RijSchool, ex.Stad, ex.Uitslag as UitslagExamen
        FROM Examinator e
        JOIN ExamenPerExaminator ee ON e.Id = ee.ExaminatorId
        JOIN Examen ex ON ee.Examenid = ex.Id
        WHERE e.Id = :id";
    
        $this->db->query($query);
        $this->db->bind(':id', $examinatorId);
        return $this->db->resultSet();
    }
}
