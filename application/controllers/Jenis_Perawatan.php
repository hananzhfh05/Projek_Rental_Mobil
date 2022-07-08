<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_perawatan extends CI_Controller {
    public function index(){
        $this->load->model('jenis_perawatan_model','jenis_perawatan');

        $data['list_jenis_perawatan']=$this->jenis_perawatan->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $data['jenis']=$this->jenis_perawatan->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/view',$data);
        $this->load->view('layout/footer');
        //die("ID ".$_id);
    }

    public function create(){
        $data['judul']='Form Kelola Jenis Perawatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("jenis_perawatan_model","jenis_perawatan");

        // $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');//hidden field

        // $data_jenis[]=$_id;// ? 1
        $data_jenis[]=$_nama;// ? 2

        if(isset($_idedit)){
            //update data lama
            $data_jenis[]=$_idedit; 
            $this->jenis_perawatan->update($data_jenis); 
            $_id = $_idedit; 
        }else{ // save data baru
            // panggil fungsi save di model 
            $this->jenis_perawatan->save($data_jenis);
            $row = $this->jenis_perawatan->lastId();
            $_id = $row->id;   
        }
        
        redirect(base_url().'index.php/jenis_perawatan/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("jenis_perawatan_model","jenis_perawatan");
        $jenisedit = $this->jenis_perawatan->findById($_id);

        $data['judul']='Form Update Jenis Perawatan';
        $data['jenisedit']=$jenisedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("jenis_perawatan_model","jenis_perawatan");
        $this->jenis_perawatan->delete($_id);
        redirect(base_url().'index.php/jenis_perawatan', 'refresh');
    }
    
}
