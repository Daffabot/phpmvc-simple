<?php
// ini controller
class Student extends Controller {
    // ini method
    public function index() {
        $data['title'] = 'Student';
        $data['student'] = $this->model('Student_model')->getAllStudent();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }

    public function add() {
        if ($this->model('Student_model')->addStudent($_POST) > 0) {
            Flasher::setFlash('success', 'added', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'added', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;
        }
    }

    public function delete($id) {
        if ($this->model('Student_model')->deleteStudent($id) > 0) {
            Flasher::setFlash('success', 'deleted', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'deleted', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;
        }
    }

    public function getedit() {
        echo json_encode($this->model('Student_model')->getStudentById($_POST['id']));
    }

    public function edit() {
        if ($this->model('Student_model')->editStudent($_POST) > 0) {
            Flasher::setFlash('success', 'edited', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        } else {
            Flasher::setFlash('failed', 'edited', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;
        }
    }

    public function search() {
        $data['title'] = 'Search Student';
        $data['student'] = $this->model('Student_model')->searchStudentData();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }
}