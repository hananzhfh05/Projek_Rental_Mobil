<?php
 class Perawatan_model extends CI_Model{

    private $table = "perawatan";
    
    public function getAll(){
        //SELECT * FROM perawatan
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM perawatan WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO perawatan
        (tanggal,biaya,km_mobil,deskripsi,mobil_id,jenis_perawatan_id)
          VALUES (?,?,?,?,?,?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
       // UPDATE
       $sql = "UPDATE perawatan SET tanggal=?,biaya=?,km_mobil=?,
       deskripsi=?,mobil_id=?,jenis_perawatan_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
       // DELETE FROM perawatan WHERE id=$id;
       $sql = "delete from perawatan where id=?";
       $this->db->query($sql,array($id));
    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id','desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }
 }







// class Dosen_model extends CI_Model{
    // public $id;
    // public $nama;
    // public $nidn;
    // public $gender;
    // public $tmp_lahir;
    // public $tgl_lahir;
    // public $pendidikan;
    // public $prodi;

// }