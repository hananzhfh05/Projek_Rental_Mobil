<?php
class Mobil_model extends CI_Model {

    private $table = 'mobil';
    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getSome(){
        $this->db->select('mobil.id, mobil.foto, mobil.biaya_sewa, merk.nama,mobil.deskripsi, merk.produk'); 
        $this->db->from('mobil');
        $this->db->join('merk', 'merk.id = mobil.merk_id'); 
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id){
        // SELECT * FROM mobil WHERE nopol=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
    public function save($data){
        // INSERT INTO mobil (id,nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id,foto)
        $sql = "INSERT INTO mobil  
        (nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id)
          VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
        // $insert_id = $this->db->insert_id();
        // return $this->getById($insert_id);

    }
    
    public function update($data){
       // UPDATE
       $sql = "UPDATE mobil SET nopol=?,warna=?,biaya_sewa=?,deskripsi=?,
       cc=?,tahun=?,merk_id=? WHERE id=?";
       $this->db->query($sql,$data);
    }
    
    public function delete($id){
       // DELETE FROM mobil WHERE nopol=$id;
       $sql = "delete from mobil where id=?";
       $this->db->query($sql,array($id));
    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id','desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function update_foto($data){
        $sql = "UPDATE mobil SET foto=? WHERE id=?";
        $this->db->query($sql, $data);
    }


}