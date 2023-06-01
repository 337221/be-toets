<?php

// namespace App\Controllers;

class ExaminatorController extends BaseController {
    private $examinatorModel;

    public function __construct() {
        $this->examinatorModel = $this->model('ExaminatorModel');
    }

    public function index() {
        $examinators = $this->examinatorModel->getAllExaminatorsWithExams();
        $data = [
            'title' => 'Examinator Overzicht',
            'examinators' => $examinators
        ];
        $this->view('examinator/index', $data);
    }
    

    public function show($id) {
        $examinator = $this->examinatorModel->getExaminatorById($id);
        $data = [
            'examinator' => $examinator
        ];
        $this->view('examinator/show', $data);
    }
    

}
