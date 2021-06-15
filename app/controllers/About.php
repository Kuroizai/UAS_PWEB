<?php

class About extends Controller{
    public function covid(){
        $data['page_name'] = 'About | Covid-19';
        $this->view('templates/header',$data);
        $this->view('About/covid',$data);
        $this->view('templates/footer');
    }

    public function vaccine(){
        $data['page_name'] = 'About | Vaccine';
        $this->view('templates/header',$data);
        $this->view('About/vaccine',$data);
        $this->view('templates/footer');
    }
}