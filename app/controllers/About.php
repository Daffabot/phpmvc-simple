<?php
class About extends Controller {
    public function index($name = 'Daffa', $job = 'Dev JS') {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['title'] = 'My';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}