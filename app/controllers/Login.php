<?php

class Login extends Controller{
    private $uname;
    private $passwd;
    

    public function index(){
        $data['page_name'] = 'Login';
        // $data['acc'] = $this->model('Data_model')->get_account();
        $this->view('templates/header',$data);
        $this->view('Login/index',$data);
        $this->view('templates/footer');
    }

    public function regist(){
        $data['page_name'] = 'Register';
        $this->view('templates/header',$data);
        $this->view('Login/regist',$data);
        $this->view('templates/footer');
    }
    
    public function check(){
        session_start();
        if (isset($_COOKIE['user']) && isset($_COOKIE['tok'])){
            $this->uname = $_SESSION['uname'];
            $this->passwd = $_SESSION['passwd'];
            $_SESSION['auth'] = $this->biscuits();
            // echo $_SESSION['auth'];
            if ($_SESSION['auth']){
                    header('Location: '.BASEURL.'/Dashboard/index');
                    exit;
            }else{
                $this->burnt();
                header('Location: '.BASEURL.'/Login');
                exit;
            }
        }else{
            $this->uname = $_POST['user'];
            $this->passwd = $_POST['pass'];
            $token = hash('sha256',$_POST['pass'])."S";
            setcookie('user',$this->uname,time()+60,'/');
            setcookie('tok',$token,time()+60,'/');
            $_SESSION['uname'] = $this->uname;
            $_SESSION['passwd'] = $this->passwd;
            header('Location: '.BASEURL.'/Login/check');
            ini_set('session.gc_maxlifetime', time()+60);
            exit;
        }
    }

    public function biscuits(){
        echo $this->uname;
        $res = $this->model('account_model')->get_account();
        // print_r($res);
        foreach($res as $datas){
            echo $this->passwd;
            // print_r($datas['username']);
            $auth = ( ( $this->uname == $datas['username'] ) && ( $this->passwd == $datas['password'] ) )? TRUE: FALSE;
            // echo $_SESSION['auth'].'<br>';
            echo $auth;
            if ($auth){
                return $auth;
            }
        }
        
    }

    public function burnt(){
        session_start();
        $_SESSION=[];
        session_unset();
        session_destroy();

        setcookie('user', '', time() - 3600 ,'/');
        setcookie('tok', '', time() - 3600 ,'/');
        header('Location: '.BASEURL.'/Login');
        exit;
    }


}