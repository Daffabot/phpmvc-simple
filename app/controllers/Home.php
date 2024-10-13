<?php
class Home extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $data['name'] = $this->model('User_model')->getUser();
        $data['quotes'] = $this->model('User_model')->getQuotes();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}