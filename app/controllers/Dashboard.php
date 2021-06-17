<?php

class Dashboard extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION['auth'])){
            $data['user'] = $_SESSION['uname'];
            $data['page_name'] = 'Dashboard';
            $data['records'] = 10;
            $data['pages'] = isset($_GET['page'])? $_GET['page'] : 1;
            $data['page_name'] = 'Home';
            $temp = $this->model('data_model')->get_data();
            $data['table'] = $this->model('data_model')->get_data_pagin($data['pages'],$data['records']);
            $data['n_page']= ceil(count($temp) / $data['records']);
            $this->view('templates/header',$data);
            $this->view('Dashboard/index',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '.BASEURL.'/Login');
            exit;
        }
    }

    public function delete($id){
        session_start();
        $data['id'] = $id;
        $data['user'] = $_SESSION['uname'];
        $data['page_name'] = 'DASH | Delete';
        $data['get'] = $this->model('data_model')->get_data_with_nomor($id);
        if($data['get']){
            $data['msg'] = '';
            $this->view('templates/header',$data);
            $this->view('Dashboard/delete',$data);
            $this->view('templates/footer');
        }else{
            $data['msg'] = "Doesn't Exist";
            $this->view('templates/header',$data);
            $this->view('Dashboard/delete',$data);
            $this->view('templates/footer');
        }
    }

    public function exec_delete($param,$ps){
        // session_start();
        // $data['user'] = $_SESSION['uname'];
        // print_r($param);
        // print_r($ps);
        $confirm = $param;
        // echo $confirm;
        $id = $ps;
        // echo $id;
        if ($confirm == "yes"){
            // echo 'masuk';
            $this->model('data_model')->delete_by_id($id);
            header('Location: '.BASEURL.'/Dashboard/index');
            exit;
        }else{
            header('Location: '.BASEURL.'/Dashboard/index');
            exit;
        }
    }

    public function update($id){
        session_start();
        $data['get'] = $this->model('data_model')->get_data_with_nomor($id);
        $data['id'] = $id;
        $data['user'] = $_SESSION['uname'];
        $data['page_name'] = 'DASH | update';
        $this->view('templates/header',$data);
        $this->view('Dashboard/update',$data);
        $this->view('templates/footer');
    }

    public function up_action($id){
        if (!empty($_POST)) {
            $kodepos = isset($_POST['kodePos']) ? $_POST['kodePos'] : NULL;
            $daerah = isset($_POST['Daerah']) ? $_POST['Daerah'] : '';
            $n_penduduk = isset($_POST['n_penduduk']) ? $_POST['n_penduduk'] : '';
            $n_vaksin = isset($_POST['n_vaksin']) ? $_POST['n_vaksin'] : '';
            $n_keluhan = isset($_POST['n_keluhan']) ? $_POST['n_keluhan'] : '';
            $this->model('data_model')->update_by_colom($id,$kodepos,$daerah,$n_penduduk,$n_vaksin,$n_keluhan);
            header('Location: '.BASEURL.'/Dashboard/index');
            exit;
        }
    }

    public function create(){
        session_start();
        $data['user'] = $_SESSION['uname'];
        $data['page_name'] = 'DASH | create';
        $this->view('templates/header',$data);
        $this->view('Dashboard/create',$data);
        $this->view('templates/footer');
    }
    
    public function create_action(){

        $kodepos = isset($_POST['kodePos']) ? $_POST['kodePos'] : NULL;
        echo $kodepos;
        $daerah = isset($_POST['Daerah']) ? $_POST['Daerah'] : '';
        $n_penduduk = isset($_POST['n_penduduk']) ? $_POST['n_penduduk'] : '';
        $n_vaksin = isset($_POST['n_vaksin']) ? $_POST['n_vaksin'] : '';
        $n_keluhan = isset($_POST['n_keluhan']) ? $_POST['n_keluhan'] : '';
        $temp = $this->model('data_model')->get_data();
        $n = count($temp)+1;
        if (isset($kodepos) && isset($daerah) && isset($n_penduduk)
            && isset($n_vaksin) && isset($n_keluhan) && isset($n)){
                echo'masuk';
                $this->model('data_model')->insert($n,$kodepos,$daerah,$n_penduduk,$n_vaksin,$n_keluhan);
                header('Location: '.BASEURL.'/Dashboard/index');
                exit;
            }
    }
}

