<?php

class data_model{
    private $myconn;
    private $table = 'dbvaksin';
    private $data;

    public function __construct(){
        $this->myconn = new Database;
    }

    public function get_data(){
        $this->myconn->query("SELECT * FROM ". $this->table." ORDER BY Nomor");
        return  $this->myconn->fetchAll();
    }

    public function get_data_pagin($pages,$records){
        $this->myconn->query("SELECT * FROM ". $this->table." ORDER BY Nomor LIMIT :curr_page,:records_per_pages");
        $this->myconn->bind(":curr_page",($pages-1)*$records);
        $this->myconn->bind(":records_per_pages",$records);
        return  $this->myconn->fetchAll();
    }
    
    public function get_data_with_nomor($id){
        $this->myconn->query("SELECT * FROM ". $this->table." WHERE Nomor = :id");
        $this->myconn->bind(":id",$id);
        return  $this->myconn->fetchAll();
    }

    public function delete_by_id($id){
        $this->myconn->query("DELETE FROM ". $this->table." WHERE Nomor = :id");
        $this->myconn->bind(":id",$id);
        $this->myconn->execute();
    }

    public function update_by_colom(
        $id,$kode,$daerah,$n_civil,$n_vaksin,$n_keluhan
    ){
        $this->myconn->query(
            'UPDATE '.$this->table .' SET 
                                    `Kode Pos` = :kode, 
                                    `Nama Daerah` = :daerah,
                                    `Jumlah Penduduk` = :n_civil,
                                    `Jumlah Tervaksin` = :n_vaksin,
                                    `Jumlah Keluhan` = :n_keluhan
                                    WHERE Nomor =:id'
        );
        $this->myconn->bind(":id",$id);
        $this->myconn->bind(":kode",$kode);
        $this->myconn->bind(":daerah",$daerah);
        $this->myconn->bind(":n_civil",$n_civil);
        $this->myconn->bind(":n_vaksin",$n_vaksin);
        $this->myconn->bind(":n_keluhan",$n_keluhan);
        $this->myconn->execute();
    }

    public function insert(
        $id,$kode,$daerah,$n_civil,$n_vaksin,$n_keluhan
    ){
        $this->myconn->query(
            'INSERT INTO '.$this->table .'(
                `Nomor`, `Nama Daerah`, `Jumlah Penduduk`,
                `Jumlah Tervaksin`,`Jumlah Keluhan`,`Kode Pos`
            ) VALUE (:id,:daerah,:n_civil,:n_vaksin,:n_keluhan,:kode)'
        );
        $this->myconn->bind(":id",$id);
        $this->myconn->bind(":kode",$kode);
        $this->myconn->bind(":daerah",$daerah);
        $this->myconn->bind(":n_civil",$n_civil);
        $this->myconn->bind(":n_vaksin",$n_vaksin);
        $this->myconn->bind(":n_keluhan",$n_keluhan);
        $this->myconn->execute();
    }
}