<?php
 class jenis_perawatan_model extends CI_Model{

    private $table = "jenis_perawatan";
    
    public function getAll(){
        //SELECT * FROM jenis_perawatan
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM jenis_perawatan WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO jenis_perawatan(nama)VALUES (?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
       // UPDATE
       $sql = "UPDATE jenis_perawatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
       // DELETE FROM merk WHERE id=$id;
       $sql = "delete from jenis_perawatan where id=?";
       $this->db->query($sql,array($id));
    }

    public function lastId(){
      $this->db->limit(1);
      $this->db->order_by('id','desc');
      $query = $this->db->get($this->table);
      return $query->row();
  }

 }







