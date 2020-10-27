<?php

class Country{
    private $db;

    public function __construct(){
        $this->db=new Database;
    }

    public function getDescription(){
        $this->db->query("SELECT description FROM country");

        $result = $this->db->resultSet();

        return $result;


    }
}