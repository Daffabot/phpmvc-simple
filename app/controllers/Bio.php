<?php
class Bio extends Controller {
    public function index() {
        $data['title'] = 'Bio';
        $data['student'] = $this->model('Student_model')->getAllStudent();
        $this->view('templates/header', $data);
        $this->view('bio/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Bio';
        $data['student'] = $this->model('Student_model')->getStudentById($id);
        $this->view('templates/header', $data);
        $this->view('bio/detail', $data);
        $this->view('templates/footer');
    }
}