<?php 


class User extends CI_controller {

    public function index() {
        $this -> load -> model('User_model');
        $mahasiswa = $this -> User_model -> getMahasiswa();

        $data['mahasiswa'] = $mahasiswa; 
        
        $this -> load -> view('home', $data);
    }

    public function profile($id) {
        $this -> load -> model('User_model');
        $mahasiswa = $this -> User_model -> getProfil($id);
        var_dump($mahasiswa);
    }

    public function insert() {
        if(isset($_POST['add'])) {
            $this -> load -> model('User_model');
            if($query = $this -> User_model -> insertMahasiswa()){
                redirect('user/index');
            }
            
            
            // var_dump($query);
            // if ($query) {
            //     redirect('/user', 'refresh');
            // }
            // else {
            //     echo "ada yang salah";
            // }
        }
        $this -> load -> view('insert');
    }

}