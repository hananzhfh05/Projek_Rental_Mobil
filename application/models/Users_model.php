<?php 
 class Users_model extends CI_Model{

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

    public function delete($id){
        // DELETE FROM users WHERE id=$id;
        $sql = "DELETE from users where id=?";
        $this->db->query($sql,array($id));
     }

     public function update($data){
        // UPDATE
        $sql = "UPDATE users SET username=?,password=MD5(?), email=?, status=?,role=? WHERE id=?";
         $this->db->query($sql,$data);
     }
}
?>