<?php

class account_model{
    private $myconn;
    private $table = 'account';
    private $accounts;

    public function __construct(){
        $this->myconn = new Database;
    }

    public function get_account(){
        $this->myconn->query('SELECT * FROM '.$this->table);
        return  $this->myconn->fetchAll();
    }

    public function check(){
        $this->accounts = $this->get_account();
        
    }
}