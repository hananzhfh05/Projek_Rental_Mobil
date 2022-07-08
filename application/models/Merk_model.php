<?php
 class Merk_model extends CI_Model{

    private $table = "merk";
    
    public function getAll(){
        //SELECT * FROM merk
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM merk WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO merk (nama,produk) VALUES (?,?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
       // UPDATE
       $sql = "UPDATE merk SET nama=?,produk=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
       // DELETE FROM merk WHERE id=$id;
       $sql = "delete from merk where id=?";
       $this->db->query($sql,array($id));
    }

    public function lastId(){
      $this->db->limit(1);
      $this->db->order_by('id','desc');
      $query = $this->db->get($this->table);
      return $query->row();
   }

 }







