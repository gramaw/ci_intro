<?php


class User_model extends CI_Model {

    public function getMahasiswa() {
        $this -> load -> database();
        $query = "SELECT * FROM mahasiswa";
        $result_test = $this -> db -> query($query);
        $mahasiswa = $result_test -> result();
        return $mahasiswa;
    }

    public function getProfil($id) {
        $this -> load -> database();
        $query = "SELECT * FROM mahasiswa WHERE nim=" . $id;
        $result_test = $this -> db -> query($query);
        return $result_test->row();
    }

    public function insertMahasiswa(){
        $this -> load -> database();
        $data = array(
            "nama" => $this -> input -> post ('nama'), 
            "nim" => $this -> input -> post('nim'), 
            "program_studi" => $this -> input -> post('program_studi')
        );
        return $this -> db -> insert('mahasiswa', $data);
        
    }


}