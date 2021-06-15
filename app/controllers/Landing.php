<?php

class Landing extends Controller{
    public function index(){
        $data['records'] = 5;
        $data['pages'] = isset($_GET['page'])? $_GET['page'] : 1;
        $data['page_name'] = 'Home';
        $temp = $this->model('data_model')->get_data();
        $data['table'] = $this->model('data_model')->get_data_pagin($data['pages'],$data['records']);
        $data['n_page']= ceil(count($temp) / $data['records']);
        $this->view('templates/header',$data);
        $this->view('Landing/index',$data);
        $this->view('templates/footer');
    }
}

