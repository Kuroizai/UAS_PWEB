<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pw = DB_PASS;
    private $dbname = DB_NAME;

    private $db;
    private $stmt;

    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,
                                $this->user,$this->pw
                            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);         
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    public function query($query){
        $this->stmt = $this->db->prepare($query);
    }

    public function bind($param,$value,$type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;                
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function fetchAll(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}