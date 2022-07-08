<?php
class Sewa_model extends CI_Model {
    
    private $table = "sewa";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result(); 
    }
    
    public function findById($id){
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function findByMobil($id){
        $this->db->where('sewa.id', $id);
        $this->db->select('sewa.id, sewa.tanggal_mulai, sewa.tanggal_akhir, sewa.tujuan, sewa.noktp, sewa.users_id, sewa.mobil_id, mobil.foto'); 
        $this->db->from('sewa');
        $this->db->join('mobil', 'mobil.id = sewa.mobil_id'); 
        $query = $this->db->get();
        return $query->result();
    }

    // public function findIdMobil($id){
    //     $this->db->where('mobil_id', $id);
    //     $query = $this->db->get($this->table);
    //     return $query->row();
    // }

    public function save($data){
        $sql = "INSERT INTO sewa (tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE sewa SET tanggal_mulai=?, tanggal_akhir=?, tujuan=?, noktp=?, users_id=?, mobil_id=? WHERE id=?";
        $this->db->query($sql,$data);

    }

    public function delete($nim){
        $sql = "DELETE FROM sewa WHERE id=?";
        $this->db->query($sql,array($nim));

    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id','desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
    
   

    
}

?>
