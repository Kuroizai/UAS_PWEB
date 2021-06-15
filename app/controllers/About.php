<?php

class About extends Controller{
    public function covid(){
        $data['records'] = 5;
        $data['cov'] = $this->get_curl('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json');
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


    public function get_curl($url){
        $session = curl_init($url);
        curl_setopt($session,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($session,CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        $data = curl_exec($session) ; curl_close($session);
        $res = json_decode($data,TRUE);
        return $res;
    }

}

