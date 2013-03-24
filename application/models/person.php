<?php

class Person extends CI_Model{
    
    public function getAll() {
        $q = $this->db->query("SELECT * FROM test");
        return  $q->result();
        
    }
}