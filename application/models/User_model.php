<?php 
 class User_model extends CI_Model{

     private $table = "users";
     
     public function getAll(){
        
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id','desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname,$pass){
         $sql = "SELECT * FROM users WHERE username=? 
              and password=MD5(?)";
         $data = [$uname,$pass];
         $query = $this->db->query($sql, $data);
         return $query->row();
    }

    public function register($data){
        $sql = "INSERT INTO users(username, password, email, status, role, created_at, last_login) values (?,MD5(?),?,0,'public',now(),now())";
        $this->db->query($sql, $data);
    }

    
}
?>