<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawatan extends CI_Controller {
    public function index(){
        $this->load->model('perawatan_model','perawatan');

        $data['list_rawat']=$this->perawatan->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model','perawatan');
        $data['rawat']=$this->perawatan->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/view',$data);
        $this->load->view('layout/footer');
        //die("ID ".$_id);
    }

    public function create(){
        $data['judul']='Form Kelola Perawatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("perawatan_model","perawatan");

        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km_mobil = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_mobil_id = $this->input->post('mobil_id');
        $_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_rawat[]=$_tanggal;// ? 2
        $data_rawat[]=$_biaya;// ? 3
        $data_rawat[]=$_km_mobil;// ? 4
        $data_rawat[]=$_deskripsi;// ? 5
        $data_rawat[]=$_mobil_id;// ? 6
        $data_rawat[]=$_jenis_perawatan_id;// ? 7

        if(isset($_idedit)){
            //update data lama
            $data_rawat[]=$_idedit; // ? 8
            $this->perawatan->update($data_rawat); 
            $_id = $_idedit; 
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->perawatan->save($data_rawat);  
            $row = $this->perawatan->lastId();
            $_id = $row->id; 
        }
        
        redirect(base_url().'index.php/perawatan/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model","perawatan");
        $rawatedit = $this->perawatan->findById($_id);

        $data['judul']='Form Update Perawatan';
        $data['rawatedit']=$rawatedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model","perawatan");
        $this->perawatan->delete($_id);
        redirect(base_url().'index.php/perawatan', 'refresh');
    }
    
}

